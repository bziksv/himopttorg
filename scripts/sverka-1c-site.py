#!/usr/bin/env python3
"""Сверка каталога сайта (IBLOCK 6) с последней выгрузкой CommerceML."""

from __future__ import annotations

import html
import json
import re
import subprocess
from collections import defaultdict
from datetime import datetime
from pathlib import Path
from io import StringIO
from xml.etree.ElementTree import iterparse

ROOT = Path(__file__).resolve().parents[1]
COPY_DIR = ROOT / "himopttorg.ru/upload/1c_catalog_copy_askaron_pro1c"
OUT_HTML = ROOT / "sverka-1c.html"


def xml_formed(path: Path) -> str:
    head = path.read_bytes()[:4096].decode("utf-8", errors="ignore")
    m = re.search(r'ДатаФормирования="([^"]+)"', head)
    return m.group(1) if m else ""


def xml_list(prefix: str) -> list[Path]:
    files = sorted(COPY_DIR.glob(f"{prefix}*.xml"))
    if not files:
        fallback = ROOT / f"{prefix}0_1.xml"
        return [fallback] if fallback.exists() else []
    dated = [(p, xml_formed(p)) for p in files]
    best = max((d for _, d in dated if d), default="")
    if not best:
        return files
    return [p for p, d in dated if d == best]


IMPORT_XMLS = xml_list("import")
OFFERS_XMLS = xml_list("offers")
IMPORT_XML = IMPORT_XMLS[0] if IMPORT_XMLS else COPY_DIR / "import0_1.xml"
OFFERS_XML = OFFERS_XMLS[0] if OFFERS_XMLS else COPY_DIR / "offers0_1.xml"
MYSQL = [
    "/opt/homebrew/opt/mysql@8.0/bin/mysql",
    "--protocol=SOCKET",
    "-S",
    "/tmp/mysql.sock",
    "-uroot",
    "himopttorg_s",
    "--batch",
    "--raw",
    "-N",
]


def local(tag: str) -> str:
    return tag.rsplit("}", 1)[-1]


def xml_documents(path: Path) -> list[str]:
    text = path.read_text(encoding="utf-8").replace("\ufeff", "")
    raw = text.split("<?xml")
    parts = []
    for i, chunk in enumerate(raw):
        if not chunk.strip():
            continue
        if i == 0 and not chunk.lstrip().startswith("<"):
            continue
        if not chunk.lstrip().startswith("<?xml"):
            chunk = "<?xml" + chunk
        parts.append(chunk)
    return parts


def parse_import(path: Path) -> tuple[dict, dict, str]:
    products: dict[str, dict] = {}
    groups: dict[str, str] = {}
    formed = ""
    current = None
    req_name = None
    in_product = False
    in_groups_of_product = False
    in_classifier_groups = False
    group_stack: list[str] = []

    for part in xml_documents(path):
      in_product = False
      current = None
      req_name = None
      in_groups_of_product = False
      group_stack = []
      for event, el in iterparse(StringIO(part), events=("start", "end")):
        name = local(el.tag)
        if event == "start":
            if name == "КоммерческаяИнформация":
                formed = el.attrib.get("ДатаФормирования", formed)
            elif name == "Товар":
                in_product = True
                current = {
                    "id": "",
                    "name": "",
                    "code": "",
                    "full_name": "",
                    "group_id": "",
                    "unit": "",
                }
            elif name == "Группа" and not in_product:
                in_classifier_groups = True
                group_stack.append("")
            elif name == "Группы" and in_product:
                in_groups_of_product = True
            continue

        if name == "Группа" and in_classifier_groups and not in_product:
            if group_stack:
                group_stack.pop()
            el.clear()
            continue

        if in_classifier_groups and not in_product and group_stack:
            if name == "Ид" and el.text and not group_stack[-1]:
                group_stack[-1] = el.text.strip()
            elif name == "Наименование" and el.text and group_stack[-1]:
                groups[group_stack[-1]] = el.text.strip()

        if in_product and current is not None:
            if name == "Ид" and not current["id"] and not in_groups_of_product:
                current["id"] = (el.text or "").strip()
            elif name == "Наименование" and not current["name"] and not in_groups_of_product:
                current["name"] = (el.text or "").strip()
            elif name == "БазоваяЕдиница":
                current["unit"] = (
                    el.attrib.get("НаименованиеПолное")
                    or el.attrib.get("МеждународноеСокращение")
                    or current["unit"]
                )
            elif name == "Ид" and in_groups_of_product and not current["group_id"]:
                current["group_id"] = (el.text or "").strip()
            elif name == "Группы" and in_groups_of_product:
                in_groups_of_product = False
            elif name == "Наименование" and req_name is None:
                req_name = (el.text or "").strip()
            elif name == "Значение" and req_name:
                val = (el.text or "").strip()
                if req_name == "Код":
                    current["code"] = val
                elif req_name == "Полное наименование":
                    current["full_name"] = val
                req_name = None
            elif name == "ЗначениеРеквизита":
                req_name = None
            elif name == "Товар":
                if current["id"]:
                    products[current["id"]] = current
                in_product = False
                current = None
                in_groups_of_product = False
        el.clear()

    return products, groups, formed


def parse_offers(path: Path) -> tuple[dict, dict, str]:
    offers: dict[str, dict] = {}
    warehouses: dict[str, str] = {}
    formed = ""
    current = None
    in_offer = False
    in_warehouses_dict = False
    wh_id = ""

    for part in xml_documents(path):
      in_offer = False
      current = None
      in_warehouses_dict = False
      wh_id = ""
      for event, el in iterparse(StringIO(part), events=("start", "end")):
        name = local(el.tag)
        if event == "start":
            if name == "КоммерческаяИнформация":
                formed = el.attrib.get("ДатаФормирования", formed)
            elif name == "Склады" and not in_offer:
                in_warehouses_dict = True
            elif name == "Предложение":
                in_offer = True
                current = {
                    "id": "",
                    "name": "",
                    "price": None,
                    "qty": None,
                    "stocks": {},
                }
            elif name == "Склад" and in_offer and current is not None:
                wid = el.attrib.get("ИдСклада", "")
                qty = el.attrib.get("КоличествоНаСкладе", "")
                if wid:
                    try:
                        current["stocks"][wid] = float(qty.replace(",", "."))
                    except ValueError:
                        current["stocks"][wid] = 0.0
            continue

        if in_warehouses_dict and not in_offer:
            if name == "Ид" and el.text:
                wh_id = el.text.strip()
            elif name == "Наименование" and wh_id and el.text:
                warehouses[wh_id] = el.text.strip()
                wh_id = ""
            elif name == "Склады":
                in_warehouses_dict = False

        if in_offer and current is not None:
            if name == "Ид" and not current["id"]:
                current["id"] = (el.text or "").strip()
            elif name == "Наименование" and not current["name"]:
                current["name"] = (el.text or "").strip()
            elif name == "ЦенаЗаЕдиницу" and current["price"] is None and el.text:
                try:
                    current["price"] = float(el.text.replace(",", ".").replace("\xa0", ""))
                except ValueError:
                    current["price"] = None
            elif name == "Количество" and current["qty"] is None and el.text:
                try:
                    current["qty"] = float(el.text.replace(",", "."))
                except ValueError:
                    current["qty"] = None
            elif name == "Предложение":
                if current["id"]:
                    offers[current["id"]] = current
                in_offer = False
                current = None
        el.clear()

    return offers, warehouses, formed


def load_site() -> list[dict]:
    query = r"""
SELECT e.ID, e.NAME, e.XML_ID, e.ACTIVE, e.CODE,
  IFNULL(p.QUANTITY, 0), IFNULL(pr.PRICE, ''),
  IFNULL(s.NAME, ''),
  IFNULL((
    SELECT ep.VALUE FROM b_iblock_element_property ep
    WHERE ep.IBLOCK_ELEMENT_ID=e.ID AND ep.IBLOCK_PROPERTY_ID=219 LIMIT 1
  ), '')
FROM b_iblock_element e
LEFT JOIN b_catalog_product p ON p.ID=e.ID
LEFT JOIN b_catalog_price pr ON pr.PRODUCT_ID=e.ID AND pr.CATALOG_GROUP_ID=3
LEFT JOIN b_iblock_section s ON s.ID=e.IBLOCK_SECTION_ID
WHERE e.IBLOCK_ID=6
"""
    cache = ROOT / ".local/run/site-catalog.tsv"
    try:
        raw = subprocess.check_output(MYSQL + ["-e", query], text=True)
        cache.parent.mkdir(parents=True, exist_ok=True)
        cache.write_text(raw, encoding="utf-8")
    except (subprocess.CalledProcessError, FileNotFoundError):
        if not cache.exists():
            raise
        raw = cache.read_text(encoding="utf-8")
    rows = []
    for line in raw.splitlines():
        if not line.strip():
            continue
        parts = line.split("\t")
        while len(parts) < 9:
            parts.append("")
        price = None
        if parts[6] not in ("", "NULL"):
            try:
                price = float(parts[6])
            except ValueError:
                price = None
        try:
            qty = float(parts[5] or 0)
        except ValueError:
            qty = 0.0
        rows.append(
            {
                "id": parts[0],
                "name": parts[1],
                "xml_id": parts[2],
                "active": parts[3] == "Y",
                "code": parts[4],
                "qty": qty,
                "price": price,
                "section": parts[7],
                "sayt_1": parts[8],
            }
        )
    return rows


def fmt_num(v) -> str:
    if v is None or v == "":
        return "—"
    if isinstance(v, float):
        if abs(v - round(v)) < 1e-9:
            return str(int(round(v)))
        text = f"{v:.6f}".rstrip("0").rstrip(".")
        return text.replace(".", ",")
    return str(v)


def esc(s) -> str:
    return html.escape("" if s is None else str(s))


def num_eq(a, b, tol=0.011) -> bool:
    if a is None and b is None:
        return True
    if a is None or b is None:
        return False
    return abs(float(a) - float(b)) <= tol


def build_report(site, import_p, offers, groups, warehouses, formed) -> dict:
    site_by_xml = {r["xml_id"]: r for r in site if r["xml_id"]}
    site_no_xml = [r for r in site if not r["xml_id"]]

    only_site = []
    only_1c = []
    name_diff = []
    price_diff = []
    qty_diff = []
    activity = []
    matched_ok = []
    matched = 0

    for xml_id, s in site_by_xml.items():
        imp = import_p.get(xml_id)
        off = offers.get(xml_id)
        if not imp and not off:
            only_site.append(s)
            continue
        matched += 1
        c1_name = (imp or off or {}).get("name") or ""
        c1_price = off["price"] if off else None
        c1_qty = off["qty"] if off else None
        extra = {**s, "c1_name": c1_name, "c1_price": c1_price, "c1_qty": c1_qty}
        has_diff = False
        if c1_name and s["name"].rstrip() != c1_name.rstrip():
            name_diff.append(extra)
            has_diff = True
        if off and not num_eq(s["price"], c1_price):
            price_diff.append(extra)
            has_diff = True
        if off and c1_qty is not None and not num_eq(s["qty"], c1_qty, 0.001):
            qty_diff.append(extra)
            has_diff = True
        if not has_diff:
            matched_ok.append(extra)
        if off and c1_qty is not None:
            if s["active"] and c1_qty <= 0 and s["sayt_1"] != "Yes":
                activity.append({**s, "c1_qty": c1_qty, "issue": "На сайте активен, в 1С остаток 0"})
            if (not s["active"]) and c1_qty > 0:
                activity.append({**s, "c1_qty": c1_qty, "issue": "На сайте выключен, в 1С есть остаток"})

    for xml_id, imp in import_p.items():
        if xml_id not in site_by_xml:
            off = offers.get(xml_id)
            only_1c.append(
                {
                    "xml_id": xml_id,
                    "name": imp["name"],
                    "code": imp.get("code") or "",
                    "group": groups.get(imp.get("group_id") or "", ""),
                    "price": off["price"] if off else None,
                    "qty": off["qty"] if off else None,
                }
            )

    for xml_id, off in offers.items():
        if xml_id not in import_p and xml_id not in site_by_xml:
            only_1c.append(
                {
                    "xml_id": xml_id,
                    "name": off["name"],
                    "code": "",
                    "group": "только в offers",
                    "price": off["price"],
                    "qty": off["qty"],
                }
            )

    only_site.sort(key=lambda r: (not r["active"], -(r["qty"] or 0), r["name"]))
    only_1c.sort(key=lambda r: (-(r["qty"] or 0), r["name"]))
    name_diff.sort(key=lambda r: r["name"])
    price_diff.sort(key=lambda r: abs((r["c1_price"] or 0) - (r["price"] or 0)), reverse=True)
    qty_diff.sort(key=lambda r: abs((r["c1_qty"] or 0) - (r["qty"] or 0)), reverse=True)

    return {
        "formed": formed,
        "generated": datetime.now().strftime("%d.%m.%Y %H:%M"),
        "site_total": len(site),
        "site_active": sum(1 for r in site if r["active"]),
        "import_total": len(import_p),
        "offers_total": len(offers),
        "matched": matched,
        "site_no_xml": site_no_xml,
        "only_site": only_site,
        "only_1c": only_1c,
        "name_diff": name_diff,
        "price_diff": price_diff,
        "qty_diff": qty_diff,
        "matched_ok": matched_ok,
        "activity": activity,
        "warehouses": warehouses,
        "groups": groups,
    }


def cell(val, *, missing=False, diff=False) -> str:
    cls = []
    if missing:
        cls.append("miss")
        val = "нет в файле" if val in (None, "", "нет в файле") else val
    if diff:
        cls.append("diff")
    if val is None or val == "":
        val = "—"
    return f'<td class="{" ".join(cls)}">{esc(val)}</td>'


def badge(kinds: list[str]) -> str:
    labels = {
        "missing_file": ("Нет в файле 1С", "b-miss"),
        "missing_site": ("Нет на сайте", "b-miss"),
        "qty": ("Остаток", "b-qty"),
        "price": ("Цена", "b-price"),
        "name": ("Имя", "b-name"),
        "ok": ("Совпадает", "b-ok"),
    }
    return "".join(
        f'<span class="badge {labels[k][1]}">{labels[k][0]}</span>' for k in kinds if k in labels
    )


def unified_rows(data: dict) -> list[dict]:
    rows = []
    for s in data["only_1c"]:
        rows.append(
            {
                "kinds": ["missing_site", "in_file"],
                "site_id": "—",
                "guid": s["xml_id"],
                "section": s.get("group") or "",
                "active": "—",
                "site_name": None,
                "file_name": s["name"],
                "site_qty": None,
                "file_qty": fmt_num(s["qty"]),
                "site_price": None,
                "file_price": fmt_num(s["price"]),
                "hot": False,
                "name_diff": False,
                "qty_diff": False,
                "price_diff": False,
                "file_missing": False,
                "site_missing": True,
            }
        )
    seen = set()
    for src, kind in (
        (data["qty_diff"], "qty"),
        (data["price_diff"], "price"),
        (data["name_diff"], "name"),
    ):
        for s in src:
            guid = s["xml_id"]
            if guid not in seen:
                seen.add(guid)
                rows.append(
                    {
                        "kinds": ["in_file", "site"],
                        "site_id": s["id"],
                        "guid": guid,
                        "section": s.get("section") or "",
                        "active": "да" if s["active"] else "нет",
                        "site_name": s["name"],
                        "file_name": s.get("c1_name") or s["name"],
                        "site_qty": fmt_num(s["qty"]),
                        "file_qty": fmt_num(s.get("c1_qty")),
                        "site_price": fmt_num(s["price"]),
                        "file_price": fmt_num(s.get("c1_price")),
                        "hot": s["active"] and (s["qty"] or 0) > 0,
                        "name_diff": False,
                        "qty_diff": False,
                        "price_diff": False,
                        "file_missing": False,
                    }
                )
    for s in data["matched_ok"]:
        rows.append(
            {
                "kinds": ["ok", "in_file", "site"],
                "site_id": s["id"],
                "guid": s["xml_id"],
                "section": s.get("section") or "",
                "active": "да" if s["active"] else "нет",
                "site_name": s["name"],
                "file_name": s.get("c1_name") or s["name"],
                "site_qty": fmt_num(s["qty"]),
                "file_qty": fmt_num(s.get("c1_qty")),
                "site_price": fmt_num(s["price"]),
                "file_price": fmt_num(s.get("c1_price")),
                "hot": False,
                "name_diff": False,
                "qty_diff": False,
                "price_diff": False,
                "file_missing": False,
            }
        )
    for s in data["only_site"]:
        rows.append(
            {
                "kinds": ["missing_file", "site"],
                "site_id": s["id"],
                "guid": s["xml_id"],
                "section": s["section"],
                "active": "да" if s["active"] else "нет",
                "site_name": s["name"],
                "file_name": None,
                "site_qty": fmt_num(s["qty"]),
                "file_qty": None,
                "site_price": fmt_num(s["price"]),
                "file_price": None,
                "hot": s["active"] and (s["qty"] or 0) > 0,
                "name_diff": False,
                "qty_diff": False,
                "price_diff": False,
                "file_missing": True,
            }
        )
    by_guid = {r["guid"]: r for r in rows if r.get("guid") and r["guid"] != "—"}
    for s in data["qty_diff"]:
        r = by_guid[s["xml_id"]]
        r["kinds"].append("qty")
        r["qty_diff"] = True
        r["file_qty"] = fmt_num(s.get("c1_qty"))
        r["file_price"] = fmt_num(s.get("c1_price")) if s.get("c1_price") is not None else r["file_price"]
    for s in data["price_diff"]:
        r = by_guid[s["xml_id"]]
        if "price" not in r["kinds"]:
            r["kinds"].append("price")
        r["price_diff"] = True
        r["file_price"] = fmt_num(s.get("c1_price"))
    for s in data["name_diff"]:
        r = by_guid[s["xml_id"]]
        if "name" not in r["kinds"]:
            r["kinds"].append("name")
        r["name_diff"] = True
        r["file_name"] = s.get("c1_name") or r["file_name"]
    return rows


def render_rows(rows: list[dict]) -> str:
    if not rows:
        return '<p class="empty">Расхождений нет</p>'
    body = []
    for r in rows:
        kinds = " ".join(r["kinds"])
        extra = " hot" if r.get("hot") else ""
        site_name = r["site_name"] if r["site_name"] is not None else "нет на сайте"
        file_name = r["file_name"] if r["file_name"] is not None else "нет в файле"
        site_qty = r["site_qty"] if r["site_qty"] is not None else "нет на сайте"
        file_qty = r["file_qty"] if r["file_qty"] is not None else "нет в файле"
        site_price = r["site_price"] if r["site_price"] is not None else "нет на сайте"
        file_price = r["file_price"] if r["file_price"] is not None else "нет в файле"
        body.append(
            f'<tr class="{extra}" data-kind="{esc(kinds)}" data-text="{esc((r.get("site_name") or "") + " " + (r.get("file_name") or "") + " " + (r.get("guid") or "")).lower()}">'
            f'<td>{badge(r["kinds"])}</td>'
            f'<td>{esc(r["site_id"])}</td>'
            f"{cell(site_name, missing=r.get('site_missing'), diff=r.get('name_diff'))}"
            f"{cell(file_name, missing=r.get('file_missing'), diff=r.get('name_diff'))}"
            f"{cell(site_qty, missing=r.get('site_missing'), diff=r.get('qty_diff'))}"
            f"{cell(file_qty, missing=r.get('file_missing'), diff=r.get('qty_diff'))}"
            f"{cell(site_price, missing=r.get('site_missing'), diff=r.get('price_diff'))}"
            f"{cell(file_price, missing=r.get('file_missing'), diff=r.get('price_diff'))}"
            f"<td>{esc(r['active'])}</td>"
            f"<td>{esc(r['section'])}</td>"
            f'<td class="guid">{esc(r["guid"])}</td>'
            "</tr>"
        )
    return (
        "<table id='grid'><thead><tr>"
        "<th>Статус</th><th>ID</th>"
        "<th>Название на сайте</th><th>Название в файле 1С</th>"
        "<th>Остаток сайт</th><th>Остаток в файле</th>"
        "<th>Цена сайт</th><th>Цена в файле</th>"
        "<th>Активен</th><th>Раздел</th><th>GUID</th>"
        "</tr></thead><tbody>"
        + "".join(body)
        + "</tbody></table>"
    )


def table(rows: list[dict], columns: list[tuple[str, str]], empty: str) -> str:
    if not rows:
        return f'<p class="empty">{esc(empty)}</p>'
    head = "".join(f"<th>{esc(title)}</th>" for _, title in columns)
    body = []
    for r in rows:
        tds = []
        for key, _ in columns:
            val = r.get(key, "")
            if key in ("price", "c1_price", "qty", "c1_qty"):
                val = fmt_num(val)
            elif key == "active":
                val = "да" if val else "нет"
            elif key == "sayt_1":
                val = val or "—"
            tds.append(f"<td>{esc(val)}</td>")
        extra = " class='hot'" if r.get("active") and (r.get("qty") or 0) > 0 else ""
        body.append(f"<tr{extra}>{''.join(tds)}</tr>")
    return f"<table><thead><tr>{head}</tr></thead><tbody>{''.join(body)}</tbody></table>"


def render(data: dict) -> str:
    rows = unified_rows(data)
    only_site_hot = sum(1 for r in data["only_site"] if r["active"] and r["qty"] > 0)
    site_n = data["site_total"]
    file_n = data["import_total"]
    in_file = data["matched"]
    ok_n = len(data["matched_ok"])
    miss_n = len(data["only_site"])
    qty_n = len(data["qty_diff"])
    price_n = len(data["price_diff"])
    name_n = len(data["name_diff"])
    miss_site_n = len(data["only_1c"])

    def card(key, n, title, sub, extra=""):
        return (
            f'<button type="button" class="card {extra}" data-filter="{key}">'
            f'<div class="n">{n}</div><div class="t">{esc(title)}</div>'
            f'<div class="s">{esc(sub)}</div></button>'
        )

    totals = (
        '<div class="totals">'
        '<div class="totals-label">Всего</div>'
        + card("site", site_n, "На сайте", "товары каталога сайта", "card-site")
        + card("in_file", file_n, "В файле 1С", "эта выгрузка XML", "card-file")
        + "</div>"
    )
    story = (
        '<div class="story">'
        + card("in_file", in_file, "1. В файле", "есть и в XML, и на сайте")
        + '<div class="arrow">→</div>'
        + card("ok", ok_n, "2. Совпадает", "имя, цена и остаток одинаковые")
        + '<div class="arrow">→</div>'
        + card("missing_file", miss_n, "3. Нет в файле", f"есть на сайте, в этой выгрузке нет · с остатком {only_site_hot}")
        + "</div>"
    )
    problems = (
        '<div class="problems">'
        '<div class="problems-label">Расхождения среди тех, кто есть и там и там</div>'
        '<div class="problems-cards">'
        + card("qty", qty_n, "Разный остаток", "цифры не совпали")
        + card("price", price_n, "Разная цена", "тип «Типовое соглашение опт»")
        + card("name", name_n, "Разное имя", "один GUID, разные названия")
        + card("missing_site", miss_site_n, "Нет на сайте", "в XML есть, GUID на сайте не найден")
        + "</div></div>"
    )
    return f"""<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Сверка 1С ↔ сайт ХИМОПТТОРГ</title>
<style>
  :root {{
    --bg: #eef2f6; --card: #fff; --ink: #122033; --muted: #5b6777;
    --line: #d5dde6; --site: #e8f1fa; --file: #f4f0e6; --miss: #fdecea; --diff: #fff3bf;
  }}
  * {{ box-sizing: border-box; }}
  body {{ margin: 0; font: 14px/1.45 -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; background: var(--bg); color: var(--ink); }}
  header {{ background: #16324f; color: #fff; padding: 22px 28px 18px; }}
  header h1 {{ margin: 0 0 6px; font-size: 20px; }}
  header p {{ margin: 0; color: #c5d4e4; font-size: 13px; }}
  .wrap {{ max-width: 1480px; margin: 0 auto; padding: 16px 18px 56px; }}
  .legend {{ background: var(--card); border: 1px solid var(--line); border-radius: 10px; padding: 12px 16px; margin: 14px 0; color: var(--muted); }}
  .pair {{ display: inline-flex; gap: 6px; align-items: center; margin-right: 16px; }}
  .sw {{ display: inline-block; width: 12px; height: 12px; border-radius: 3px; vertical-align: middle; }}
  .totals, .story, .problems-cards {{ display: flex; gap: 10px; align-items: stretch; }}
  .totals {{ background: var(--card); border: 1px solid var(--line); border-radius: 12px; padding: 12px; margin-bottom: 12px; }}
  .totals-label, .problems-label {{ font-size: 12px; font-weight: 700; letter-spacing: .04em; text-transform: uppercase; color: var(--muted); align-self: center; min-width: 64px; }}
  .totals .card {{ flex: 1; }}
  .story {{ margin-bottom: 12px; }}
  .story .card {{ flex: 1; }}
  .arrow {{ align-self: center; color: #8a96a5; font-size: 22px; padding: 0 2px; }}
  .problems {{ margin-bottom: 14px; }}
  .problems-label {{ margin: 0 0 8px; }}
  .problems-cards .card {{ flex: 1; padding: 8px 10px; }}
  .problems-cards .n {{ font-size: 20px; }}
  .card {{ background: var(--card); border: 1px solid var(--line); border-radius: 10px; padding: 10px 12px; text-align: left; cursor: pointer; }}
  .card:hover, .card.on {{ border-color: #1b6fb6; box-shadow: 0 0 0 2px #1b6fb633; }}
  .card-site {{ background: #eef6fc; }}
  .card-file {{ background: #f7f3e8; }}
  .card .n {{ font-size: 28px; font-weight: 700; line-height: 1.1; }}
  .card .t {{ font-weight: 650; margin-top: 4px; }}
  .card .s {{ color: var(--muted); font-size: 12px; }}
  .toolbar {{ display: flex; gap: 10px; align-items: center; flex-wrap: wrap; margin-bottom: 10px; }}
  .toolbar input {{ flex: 1; min-width: 220px; padding: 8px 10px; border: 1px solid var(--line); border-radius: 8px; }}
  .toolbar button {{ border: 1px solid var(--line); background: #fff; border-radius: 8px; padding: 8px 12px; cursor: pointer; }}
  .count {{ color: var(--muted); }}
  .board {{ background: var(--card); border: 1px solid var(--line); border-radius: 12px; overflow: auto; max-height: calc(100vh - 220px); }}
  table {{ width: 100%; border-collapse: collapse; font-size: 13px; }}
  th, td {{ border-bottom: 1px solid var(--line); text-align: left; padding: 7px 8px; vertical-align: top; }}
  thead th {{ position: sticky; top: 0; z-index: 2; }}
  thead th.site {{ background: #d7e7f6; }}
  thead th.file {{ background: #eee4c8; }}
  thead th {{ background: #e8edf3; }}
  td:nth-child(3), td:nth-child(5), td:nth-child(7) {{ background: #f3f8fc; }}
  td:nth-child(4), td:nth-child(6), td:nth-child(8) {{ background: #faf6ea; }}
  td.miss {{ background: var(--miss) !important; color: #8a1f13; font-weight: 650; }}
  td.diff {{ background: var(--diff) !important; font-weight: 650; }}
  tr.hot td:first-child {{ box-shadow: inset 3px 0 0 #e3a008; }}
  .badge {{ display: inline-block; padding: 2px 7px; border-radius: 999px; font-size: 11px; font-weight: 650; margin: 0 3px 3px 0; white-space: nowrap; }}
  .b-miss {{ background: #f8d0cb; color: #7a160e; }}
  .b-qty {{ background: #ffe08a; color: #6a4b00; }}
  .b-price {{ background: #cfe3ff; color: #0b3d80; }}
  .b-name {{ background: #e2d6ff; color: #3b1d86; }}
  .b-ok {{ background: #d4edda; color: #155724; }}
  .guid {{ font-size: 11px; color: #667; word-break: break-all; }}
  @media (max-width: 900px) {{
    .totals, .story, .problems-cards {{ flex-wrap: wrap; }}
    .arrow {{ display: none; }}
    .card {{ min-width: 46%; }}
  }}
</style>
</head>
<body>
<header>
  <h1>Сверка: сайт слева · файл 1С справа</h1>
  <p>Выгрузка {esc(data["formed"] or "—")} · отчёт {esc(data["generated"])} · import0_1.xml + offers0_1.xml</p>
</header>
<div class="wrap">
  {totals}
  {story}
  {problems}
  <div class="legend">
    <span class="pair"><span class="sw" style="background:#d7e7f6"></span> колонки сайта</span>
    <span class="pair"><span class="sw" style="background:#eee4c8"></span> колонки файла 1С</span>
    <span class="pair"><span class="sw" style="background:#fdecea"></span> нет в источнике</span>
    <span class="pair"><span class="sw" style="background:#fff3bf"></span> значение не совпало</span>
  </div>
  <div class="toolbar">
    <input type="search" id="q" placeholder="Найти: бензол, GUID, раздел…">
    <button type="button" id="diffs">Только расхождения</button>
    <button type="button" id="all">Все строки</button>
    <span class="count" id="count"></span>
  </div>
  <div class="board">
    {render_rows(rows)}
  </div>
</div>
<script>
const rows = [...document.querySelectorAll("#grid tbody tr")];
const cards = [...document.querySelectorAll(".card")];
let filter = "";
function apply() {{
  const q = document.getElementById("q").value.trim().toLowerCase();
  let n = 0;
  rows.forEach(tr => {{
    const kinds = (tr.dataset.kind || "").split(/\\s+/);
    const okKind = !filter || (filter === "diffs" ? kinds.some(k => ["qty","price","name","missing_file","missing_site"].includes(k)) : kinds.includes(filter));
    const okQ = !q || (tr.dataset.text || tr.innerText.toLowerCase()).includes(q);
    const show = okKind && okQ;
    tr.style.display = show ? "" : "none";
    if (show) n++;
  }});
  document.getElementById("count").textContent = "Показано " + n + " из " + rows.length;
  cards.forEach(b => b.classList.toggle("on", b.dataset.filter === filter && filter && filter !== "diffs"));
}}
cards.forEach(btn => btn.addEventListener("click", () => {{
  const next = btn.dataset.filter;
  filter = filter === next ? "" : next;
  apply();
}}));
document.getElementById("q").addEventListener("input", apply);
document.getElementById("all").addEventListener("click", () => {{
  filter = "";
  document.getElementById("q").value = "";
  apply();
}});
document.getElementById("diffs").addEventListener("click", () => {{
  filter = "diffs";
  apply();
}});
apply();
</script>
</body>
</html>
"""


def main() -> None:
    print("parse import…", ", ".join(p.name for p in IMPORT_XMLS) or "нет файлов")
    import_p, groups, formed_i = {}, {}, ""
    for path in IMPORT_XMLS:
        p, g, f = parse_import(path)
        import_p.update(p)
        groups.update(g)
        formed_i = f or formed_i
    print(f"  products={len(import_p)} groups={len(groups)}")
    print("parse offers…", ", ".join(p.name for p in OFFERS_XMLS) or "нет файлов")
    offers, warehouses, formed_o = {}, {}, ""
    for path in OFFERS_XMLS:
        o, w, f = parse_offers(path)
        offers.update(o)
        warehouses.update(w)
        formed_o = f or formed_o
    print(f"  offers={len(offers)} warehouses={len(warehouses)}")
    print("load site…")
    site = load_site()
    print(f"  site={len(site)}")
    data = build_report(site, import_p, offers, groups, warehouses, formed_i or formed_o)
    OUT_HTML.write_text(render(data), encoding="utf-8")
    print(f"wrote {OUT_HTML}")
    print(json.dumps({
        "only_site": len(data["only_site"]),
        "only_1c": len(data["only_1c"]),
        "name_diff": len(data["name_diff"]),
        "price_diff": len(data["price_diff"]),
        "qty_diff": len(data["qty_diff"]),
        "matched_ok": len(data["matched_ok"]),
        "matched": data["matched"],
        "activity": len(data["activity"]),
    }, ensure_ascii=False))


if __name__ == "__main__":
    main()

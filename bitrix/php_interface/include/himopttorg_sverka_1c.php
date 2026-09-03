<?php
/**
 * Сверка каталога сайта (IBLOCK 6) с копиями выгрузки 1С
 * в /upload/1c_catalog_copy_askaron_pro1c/
 */

define("HIMOPT_SVERKA_IBLOCK", 6);
define("HIMOPT_SVERKA_PRICE_GROUP", 3);
define("HIMOPT_SVERKA_DIR", "/upload/1c_catalog_copy_askaron_pro1c");

function himopttorg_sverka_dir()
{
	return rtrim($_SERVER["DOCUMENT_ROOT"], "/").HIMOPT_SVERKA_DIR;
}

function himopttorg_sverka_xml_formed($path)
{
	$fh = @fopen($path, "rb");
	if (!$fh) {
		return "";
	}
	$head = fread($fh, 4096);
	fclose($fh);
	if (preg_match('/ДатаФормирования="([^"]+)"/u', $head, $m)) {
		return $m[1];
	}
	return "";
}

function himopttorg_sverka_xml_files($prefix)
{
	$dir = himopttorg_sverka_dir();
	$files = glob($dir."/".$prefix."*.xml") ?: [];
	if (!$files) {
		return [];
	}
	$best = "";
	$meta = [];
	foreach ($files as $path) {
		$formed = himopttorg_sverka_xml_formed($path);
		$meta[] = [$path, $formed];
		if ($formed !== "" && strcmp($formed, $best) > 0) {
			$best = $formed;
		}
	}
	if ($best === "") {
		natcasesort($files);
		return array_values($files);
	}
	$picked = [];
	foreach ($meta as $row) {
		if ($row[1] === $best) {
			$picked[] = $row[0];
		}
	}
	natcasesort($picked);
	return array_values($picked);
}

function himopttorg_sverka_esc($s)
{
	return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

function himopttorg_sverka_fmt($v)
{
	if ($v === null || $v === "") {
		return "—";
	}
	$n = (float)$v;
	if (abs($n - round($n)) < 1e-9) {
		return (string)(int)round($n);
	}
	$text = rtrim(rtrim(sprintf("%.6f", $n), "0"), ".");
	return str_replace(".", ",", $text);
}

function himopttorg_sverka_num_eq($a, $b, $tol = 0.011)
{
	if ($a === null && $b === null) {
		return true;
	}
	if ($a === null || $b === null) {
		return false;
	}
	return abs((float)$a - (float)$b) <= $tol;
}

function himopttorg_sverka_xml_parts($path)
{
	$raw = file_get_contents($path);
	if ($raw === false) {
		return [];
	}
	if (strncmp($raw, "\xEF\xBB\xBF", 3) === 0) {
		$raw = substr($raw, 3);
	}
	$chunks = explode("<?xml", $raw);
	$parts = [];
	foreach ($chunks as $chunk) {
		if (trim($chunk) === "") {
			continue;
		}
		$parts[] = "<?xml".$chunk;
	}
	return $parts;
}

function himopttorg_sverka_dom_first(DOMNode $node, $local)
{
	foreach ($node->childNodes as $child) {
		if ($child->nodeType === XML_ELEMENT_NODE && $child->localName === $local) {
			return $child;
		}
	}
	return null;
}

function himopttorg_sverka_dom_text(DOMNode $node, $local)
{
	$child = himopttorg_sverka_dom_first($node, $local);
	return $child ? trim($child->textContent) : "";
}

function himopttorg_sverka_parse_num($text)
{
	$text = trim(str_replace(["\xc2\xa0", " "], "", (string)$text));
	if ($text === "") {
		return null;
	}
	$text = str_replace(",", ".", $text);
	if (!is_numeric($text)) {
		return null;
	}
	return (float)$text;
}

function himopttorg_sverka_parse_import_files(array $paths)
{
	$products = [];
	$formed = "";
	foreach ($paths as $path) {
		foreach (himopttorg_sverka_xml_parts($path) as $xml) {
			$reader = new XMLReader();
			if (!$reader->XML($xml, "UTF-8")) {
				continue;
			}
			while ($reader->read()) {
				if ($reader->nodeType !== XMLReader::ELEMENT) {
					continue;
				}
				if ($reader->localName === "КоммерческаяИнформация") {
					$attr = $reader->getAttribute("ДатаФормирования");
					if ($attr) {
						$formed = $attr;
					}
				} elseif ($reader->localName === "Товар") {
					$dom = $reader->expand();
					if ($dom) {
						$id = himopttorg_sverka_dom_text($dom, "Ид");
						if ($id !== "") {
							$products[$id] = [
								"id" => $id,
								"name" => himopttorg_sverka_dom_text($dom, "Наименование"),
							];
						}
					}
					$reader->next();
				}
			}
			$reader->close();
		}
	}
	return [$products, $formed];
}

function himopttorg_sverka_parse_offers_files(array $paths)
{
	$offers = [];
	$formed = "";
	foreach ($paths as $path) {
		foreach (himopttorg_sverka_xml_parts($path) as $xml) {
			$reader = new XMLReader();
			if (!$reader->XML($xml, "UTF-8")) {
				continue;
			}
			while ($reader->read()) {
				if ($reader->nodeType !== XMLReader::ELEMENT) {
					continue;
				}
				if ($reader->localName === "КоммерческаяИнформация") {
					$attr = $reader->getAttribute("ДатаФормирования");
					if ($attr) {
						$formed = $attr;
					}
				} elseif ($reader->localName === "Предложение") {
					$dom = $reader->expand();
					if ($dom) {
						$id = himopttorg_sverka_dom_text($dom, "Ид");
						if ($id !== "") {
							$price = null;
							$prices = himopttorg_sverka_dom_first($dom, "Цены");
							if ($prices) {
								$priceNode = himopttorg_sverka_dom_first($prices, "Цена");
								if ($priceNode) {
									$price = himopttorg_sverka_parse_num(himopttorg_sverka_dom_text($priceNode, "ЦенаЗаЕдиницу"));
								}
							}
							$offers[$id] = [
								"id" => $id,
								"name" => himopttorg_sverka_dom_text($dom, "Наименование"),
								"qty" => himopttorg_sverka_parse_num(himopttorg_sverka_dom_text($dom, "Количество")),
								"price" => $price,
							];
						}
					}
					$reader->next();
				}
			}
			$reader->close();
		}
	}
	return [$offers, $formed];
}

function himopttorg_sverka_load_site()
{
	global $DB;
	$sql = "
		SELECT e.ID, e.NAME, e.XML_ID, e.ACTIVE, e.CODE,
			IFNULL(p.QUANTITY, 0) AS QTY, pr.PRICE,
			IFNULL(s.NAME, '') AS SECTION,
			IFNULL(s.CODE, '') AS SECTION_CODE
		FROM b_iblock_element e
		LEFT JOIN b_catalog_product p ON p.ID = e.ID
		LEFT JOIN b_catalog_price pr ON pr.PRODUCT_ID = e.ID AND pr.CATALOG_GROUP_ID = ".intval(HIMOPT_SVERKA_PRICE_GROUP)."
		LEFT JOIN b_iblock_section s ON s.ID = e.IBLOCK_SECTION_ID
		WHERE e.IBLOCK_ID = ".intval(HIMOPT_SVERKA_IBLOCK)."
	";
	$rs = $DB->Query($sql);
	$rows = [];
	while ($r = $rs->Fetch()) {
		$price = $r["PRICE"];
		$rows[] = [
			"id" => $r["ID"],
			"name" => $r["NAME"],
			"xml_id" => $r["XML_ID"],
			"active" => $r["ACTIVE"] === "Y",
			"code" => $r["CODE"],
			"qty" => (float)$r["QTY"],
			"price" => ($price === null || $price === "") ? null : (float)$price,
			"section" => $r["SECTION"],
			"section_code" => $r["SECTION_CODE"],
		];
	}
	return $rows;
}

function himopttorg_sverka_build($site, $importP, $offers, $formed)
{
	$siteByXml = [];
	foreach ($site as $row) {
		if ($row["xml_id"]) {
			$siteByXml[$row["xml_id"]] = $row;
		}
	}

	$onlySite = [];
	$only1c = [];
	$nameDiff = [];
	$priceDiff = [];
	$qtyDiff = [];
	$matchedOk = [];
	$matched = 0;

	foreach ($siteByXml as $xmlId => $s) {
		$imp = isset($importP[$xmlId]) ? $importP[$xmlId] : null;
		$off = isset($offers[$xmlId]) ? $offers[$xmlId] : null;
		if (!$imp && !$off) {
			$onlySite[] = $s;
			continue;
		}
		$matched++;
		$c1Name = ($imp && $imp["name"] !== "") ? $imp["name"] : (($off && $off["name"] !== "") ? $off["name"] : "");
		$c1Price = $off ? $off["price"] : null;
		$c1Qty = $off ? $off["qty"] : null;
		$extra = $s;
		$extra["c1_name"] = $c1Name;
		$extra["c1_price"] = $c1Price;
		$extra["c1_qty"] = $c1Qty;
		$hasDiff = false;
		if ($c1Name !== "" && rtrim($s["name"]) !== rtrim($c1Name)) {
			$nameDiff[] = $extra;
			$hasDiff = true;
		}
		if ($off && !himopttorg_sverka_num_eq($s["price"], $c1Price)) {
			$priceDiff[] = $extra;
			$hasDiff = true;
		}
		if ($off && $c1Qty !== null && !himopttorg_sverka_num_eq($s["qty"], $c1Qty, 0.001)) {
			$qtyDiff[] = $extra;
			$hasDiff = true;
		}
		if (!$hasDiff) {
			$matchedOk[] = $extra;
		}
	}

	foreach ($importP as $xmlId => $imp) {
		if (isset($siteByXml[$xmlId])) {
			continue;
		}
		$off = isset($offers[$xmlId]) ? $offers[$xmlId] : [];
		$only1c[] = [
			"xml_id" => $xmlId,
			"name" => $imp["name"],
			"qty" => isset($off["qty"]) ? $off["qty"] : null,
			"price" => isset($off["price"]) ? $off["price"] : null,
		];
	}
	foreach ($offers as $xmlId => $off) {
		if (isset($siteByXml[$xmlId]) || isset($importP[$xmlId])) {
			continue;
		}
		$only1c[] = [
			"xml_id" => $xmlId,
			"name" => $off["name"],
			"qty" => $off["qty"],
			"price" => $off["price"],
		];
	}

	return [
		"formed" => $formed,
		"generated" => date("d.m.Y H:i"),
		"site_total" => count($site),
		"import_total" => count($importP) ?: count($offers),
		"matched" => $matched,
		"only_site" => $onlySite,
		"only_1c" => $only1c,
		"name_diff" => $nameDiff,
		"price_diff" => $priceDiff,
		"qty_diff" => $qtyDiff,
		"matched_ok" => $matchedOk,
	];
}

function himopttorg_sverka_front_url($id, $code, $sectionCode)
{
	$id = (int)$id;
	$code = trim((string)$code);
	$sectionCode = trim((string)$sectionCode);
	if ($id <= 0) {
		return "";
	}
	if ($sectionCode !== "" && $code !== "") {
		return "/catalog/".rawurlencode($sectionCode)."/".rawurlencode($code)."/";
	}
	return "/catalog/?ELEMENT_ID=".$id;
}

function himopttorg_sverka_admin_url($id)
{
	$id = (int)$id;
	if ($id <= 0) {
		return "";
	}
	return "/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=".intval(HIMOPT_SVERKA_IBLOCK).
		"&type=catalog&lang=ru&ID=".$id."&find_section_section=-1";
}

function himopttorg_sverka_links_from_site($s)
{
	$id = isset($s["id"]) ? (int)$s["id"] : 0;
	$code = isset($s["code"]) ? $s["code"] : "";
	$sectionCode = isset($s["section_code"]) ? $s["section_code"] : "";
	return [
		"front_url" => himopttorg_sverka_front_url($id, $code, $sectionCode),
		"admin_url" => himopttorg_sverka_admin_url($id),
	];
}

function himopttorg_sverka_cell($val, $missing = false, $diff = false)
{
	$cls = [];
	if ($missing) {
		$cls[] = "miss";
		if ($val === null || $val === "" || $val === "нет в файле") {
			$val = "нет в файле";
		}
	}
	if ($diff) {
		$cls[] = "diff";
	}
	if ($val === null || $val === "") {
		$val = "—";
	}
	$class = $cls ? ' class="'.implode(" ", $cls).'"' : "";
	return "<td".$class.">".himopttorg_sverka_esc($val)."</td>";
}

function himopttorg_sverka_name_cell($val, $url, $missing = false, $diff = false)
{
	$cls = [];
	if ($missing) {
		$cls[] = "miss";
		if ($val === null || $val === "" || $val === "нет на сайте") {
			$val = "нет на сайте";
		}
	}
	if ($diff) {
		$cls[] = "diff";
	}
	if ($val === null || $val === "") {
		$val = "—";
	}
	$class = $cls ? ' class="'.implode(" ", $cls).'"' : "";
	$inner = himopttorg_sverka_esc($val);
	if ($url && $val !== "нет на сайте" && $val !== "—") {
		$inner = '<a class="name-link" href="'.himopttorg_sverka_esc($url).'" target="_blank" rel="noopener">'.$inner."</a>";
	}
	return "<td".$class.">".$inner."</td>";
}

function himopttorg_sverka_id_cell($r)
{
	$id = $r["site_id"];
	$url = !empty($r["admin_url"]) ? $r["admin_url"] : "";
	if ($id === "—" || $id === "" || !$url) {
		return "<td>".himopttorg_sverka_esc($id)."</td>";
	}
	return '<td><a class="id-link" href="'.himopttorg_sverka_esc($url).'" target="_blank" rel="noopener">'.
		himopttorg_sverka_esc($id)."</a></td>";
}

function himopttorg_sverka_open_cell($r)
{
	$front = !empty($r["front_url"]) ? $r["front_url"] : "";
	$admin = !empty($r["admin_url"]) ? $r["admin_url"] : "";
	if (!$front && !$admin) {
		return '<td class="open">—</td>';
	}
	$html = '<td class="open">';
	if ($front) {
		$html .= '<a class="go go-front" href="'.himopttorg_sverka_esc($front).'" target="_blank" rel="noopener">Сайт</a>';
	}
	if ($admin) {
		$html .= '<a class="go go-admin" href="'.himopttorg_sverka_esc($admin).'" target="_blank" rel="noopener">Админ</a>';
	}
	return $html."</td>";
}

function himopttorg_sverka_badge(array $kinds)
{
	$labels = [
		"missing_file" => ["Нет в файле 1С", "b-miss"],
		"missing_site" => ["Нет на сайте", "b-miss"],
		"qty" => ["Остаток", "b-qty"],
		"price" => ["Цена", "b-price"],
		"name" => ["Имя", "b-name"],
		"ok" => ["Совпадает", "b-ok"],
	];
	$html = "";
	foreach ($kinds as $k) {
		if (!isset($labels[$k])) {
			continue;
		}
		$html .= '<span class="badge '.$labels[$k][1].'">'.$labels[$k][0]."</span>";
	}
	return $html;
}

function himopttorg_sverka_rows($data)
{
	$rows = [];
	foreach ($data["only_1c"] as $s) {
		$rows[] = [
			"kinds" => ["missing_site", "in_file"],
			"site_id" => "—",
			"guid" => $s["xml_id"],
			"section" => "",
			"active" => "—",
			"site_name" => null,
			"file_name" => $s["name"],
			"site_qty" => null,
			"file_qty" => himopttorg_sverka_fmt($s["qty"]),
			"site_price" => null,
			"file_price" => himopttorg_sverka_fmt($s["price"]),
			"hot" => false,
			"name_diff" => false,
			"qty_diff" => false,
			"price_diff" => false,
			"file_missing" => false,
			"site_missing" => true,
			"front_url" => "",
			"admin_url" => "",
		];
	}

	$seen = [];
	foreach ([["qty_diff", "qty"], ["price_diff", "price"], ["name_diff", "name"]] as $pair) {
		list($src, $kind) = $pair;
		foreach ($data[$src] as $s) {
			$guid = $s["xml_id"];
			if (isset($seen[$guid])) {
				continue;
			}
			$seen[$guid] = true;
			$rows[] = [
				"kinds" => ["in_file", "site"],
				"site_id" => $s["id"],
				"guid" => $guid,
				"section" => isset($s["section"]) ? $s["section"] : "",
				"active" => $s["active"] ? "да" : "нет",
				"site_name" => $s["name"],
				"file_name" => !empty($s["c1_name"]) ? $s["c1_name"] : $s["name"],
				"site_qty" => himopttorg_sverka_fmt($s["qty"]),
				"file_qty" => himopttorg_sverka_fmt(isset($s["c1_qty"]) ? $s["c1_qty"] : null),
				"site_price" => himopttorg_sverka_fmt($s["price"]),
				"file_price" => himopttorg_sverka_fmt(isset($s["c1_price"]) ? $s["c1_price"] : null),
				"hot" => $s["active"] && ($s["qty"] ?: 0) > 0,
				"name_diff" => false,
				"qty_diff" => false,
				"price_diff" => false,
				"file_missing" => false,
			] + himopttorg_sverka_links_from_site($s);
		}
	}

	foreach ($data["matched_ok"] as $s) {
		$rows[] = [
			"kinds" => ["ok", "in_file", "site"],
			"site_id" => $s["id"],
			"guid" => $s["xml_id"],
			"section" => isset($s["section"]) ? $s["section"] : "",
			"active" => $s["active"] ? "да" : "нет",
			"site_name" => $s["name"],
			"file_name" => !empty($s["c1_name"]) ? $s["c1_name"] : $s["name"],
			"site_qty" => himopttorg_sverka_fmt($s["qty"]),
			"file_qty" => himopttorg_sverka_fmt(isset($s["c1_qty"]) ? $s["c1_qty"] : null),
			"site_price" => himopttorg_sverka_fmt($s["price"]),
			"file_price" => himopttorg_sverka_fmt(isset($s["c1_price"]) ? $s["c1_price"] : null),
			"hot" => false,
			"name_diff" => false,
			"qty_diff" => false,
			"price_diff" => false,
			"file_missing" => false,
		] + himopttorg_sverka_links_from_site($s);
	}

	foreach ($data["only_site"] as $s) {
		$rows[] = [
			"kinds" => ["missing_file", "site"],
			"site_id" => $s["id"],
			"guid" => $s["xml_id"],
			"section" => $s["section"],
			"active" => $s["active"] ? "да" : "нет",
			"site_name" => $s["name"],
			"file_name" => null,
			"site_qty" => himopttorg_sverka_fmt($s["qty"]),
			"file_qty" => null,
			"site_price" => himopttorg_sverka_fmt($s["price"]),
			"file_price" => null,
			"hot" => $s["active"] && ($s["qty"] ?: 0) > 0,
			"name_diff" => false,
			"qty_diff" => false,
			"price_diff" => false,
			"file_missing" => true,
		] + himopttorg_sverka_links_from_site($s);
	}

	$byGuid = [];
	foreach ($rows as $i => $r) {
		if (!empty($r["guid"]) && $r["guid"] !== "—") {
			$byGuid[$r["guid"]] = $i;
		}
	}
	foreach ($data["qty_diff"] as $s) {
		$i = $byGuid[$s["xml_id"]];
		$rows[$i]["kinds"][] = "qty";
		$rows[$i]["qty_diff"] = true;
		$rows[$i]["file_qty"] = himopttorg_sverka_fmt(isset($s["c1_qty"]) ? $s["c1_qty"] : null);
	}
	foreach ($data["price_diff"] as $s) {
		$i = $byGuid[$s["xml_id"]];
		if (!in_array("price", $rows[$i]["kinds"], true)) {
			$rows[$i]["kinds"][] = "price";
		}
		$rows[$i]["price_diff"] = true;
		$rows[$i]["file_price"] = himopttorg_sverka_fmt(isset($s["c1_price"]) ? $s["c1_price"] : null);
	}
	foreach ($data["name_diff"] as $s) {
		$i = $byGuid[$s["xml_id"]];
		if (!in_array("name", $rows[$i]["kinds"], true)) {
			$rows[$i]["kinds"][] = "name";
		}
		$rows[$i]["name_diff"] = true;
		if (!empty($s["c1_name"])) {
			$rows[$i]["file_name"] = $s["c1_name"];
		}
	}
	return $rows;
}

function himopttorg_sverka_render_table($rows)
{
	if (!$rows) {
		return '<p class="empty">Товаров нет</p>';
	}
	$body = [];
	foreach ($rows as $r) {
		$kinds = implode(" ", $r["kinds"]);
		$extra = !empty($r["hot"]) ? " hot" : "";
		$siteName = $r["site_name"] !== null ? $r["site_name"] : "нет на сайте";
		$fileName = $r["file_name"] !== null ? $r["file_name"] : "нет в файле";
		$siteQty = $r["site_qty"] !== null ? $r["site_qty"] : "нет на сайте";
		$fileQty = $r["file_qty"] !== null ? $r["file_qty"] : "нет в файле";
		$sitePrice = $r["site_price"] !== null ? $r["site_price"] : "нет на сайте";
		$filePrice = $r["file_price"] !== null ? $r["file_price"] : "нет в файле";
		$text = mb_strtolower(($r["site_id"] ?: "")." ".($r["site_name"] ?: "")." ".($r["file_name"] ?: "")." ".($r["guid"] ?: "")." ".($r["section"] ?: ""), "UTF-8");
		$body[] =
			'<tr class="'.$extra.'" data-kind="'.himopttorg_sverka_esc($kinds).'" data-text="'.himopttorg_sverka_esc($text).'">'.
			"<td>".himopttorg_sverka_badge($r["kinds"])."</td>".
			himopttorg_sverka_id_cell($r).
			himopttorg_sverka_open_cell($r).
			himopttorg_sverka_name_cell($siteName, !empty($r["front_url"]) ? $r["front_url"] : "", !empty($r["site_missing"]), !empty($r["name_diff"])).
			himopttorg_sverka_cell($fileName, !empty($r["file_missing"]), !empty($r["name_diff"])).
			himopttorg_sverka_cell($siteQty, !empty($r["site_missing"]), !empty($r["qty_diff"])).
			himopttorg_sverka_cell($fileQty, !empty($r["file_missing"]), !empty($r["qty_diff"])).
			himopttorg_sverka_cell($sitePrice, !empty($r["site_missing"]), !empty($r["price_diff"])).
			himopttorg_sverka_cell($filePrice, !empty($r["file_missing"]), !empty($r["price_diff"])).
			"<td>".himopttorg_sverka_esc($r["active"])."</td>".
			"<td>".himopttorg_sverka_esc($r["section"])."</td>".
			'<td class="guid">'.himopttorg_sverka_esc($r["guid"])."</td>".
			"</tr>";
	}
	return "<table id='grid'><thead><tr>".
		himopttorg_sverka_th("Статус").
		himopttorg_sverka_th("ID", "num").
		himopttorg_sverka_th("Открыть").
		himopttorg_sverka_th("Название на сайте").
		himopttorg_sverka_th("Название в файле 1С").
		himopttorg_sverka_th("Остаток сайт", "num").
		himopttorg_sverka_th("Остаток в файле", "num").
		himopttorg_sverka_th("Цена сайт", "num").
		himopttorg_sverka_th("Цена в файле", "num").
		himopttorg_sverka_th("Активен").
		himopttorg_sverka_th("Раздел").
		himopttorg_sverka_th("GUID").
		"</tr></thead><tbody>".implode("", $body)."</tbody></table>";
}

function himopttorg_sverka_th($label, $type = "text")
{
	return '<th class="sortable" data-type="'.$type.'" scope="col" title="Сортировать">'.
		himopttorg_sverka_esc($label)."</th>";
}

function himopttorg_sverka_card($key, $n, $title, $sub, $extra = "")
{
	return '<button type="button" class="card '.$extra.'" data-filter="'.himopttorg_sverka_esc($key).'">'.
		'<div class="n">'.intval($n)."</div>".
		'<div class="t">'.himopttorg_sverka_esc($title)."</div>".
		'<div class="s">'.himopttorg_sverka_esc($sub)."</div></button>";
}

function himopttorg_sverka_collect()
{
	@set_time_limit(180);
	$imports = himopttorg_sverka_xml_files("import");
	$offersFiles = himopttorg_sverka_xml_files("offers");
	if (!$imports && !$offersFiles) {
		return null;
	}
	list($importP, $formedI) = himopttorg_sverka_parse_import_files($imports);
	list($offers, $formedO) = himopttorg_sverka_parse_offers_files($offersFiles);
	$site = himopttorg_sverka_load_site();
	$data = himopttorg_sverka_build($site, $importP, $offers, $formedI ?: $formedO);
	$data["import_files"] = array_map("basename", $imports);
	$data["offers_files"] = array_map("basename", $offersFiles);
	$data["file_mtime"] = 0;
	foreach (array_merge($imports, $offersFiles) as $f) {
		$mtime = @filemtime($f);
		if ($mtime > $data["file_mtime"]) {
			$data["file_mtime"] = $mtime;
		}
	}
	return $data;
}

function himopttorg_sverka_render()
{
	$data = himopttorg_sverka_collect();
	if ($data === null) {
		header("Content-Type: text/html; charset=utf-8");
		$dir = HIMOPT_SVERKA_DIR;
		echo "<!DOCTYPE html><html lang='ru'><head><meta charset='utf-8'><title>Сверка 1С</title></head><body>";
		echo "<h1>Нет файлов выгрузки</h1>";
		echo "<p>Ожидаются <code>import*.xml</code> и <code>offers*.xml</code> в <code>".himopttorg_sverka_esc($dir)."</code>.</p>";
		echo "<p>Askaron Pro1C копирует их сюда при обмене с 1С.</p>";
		echo "</body></html>";
		return;
	}

	$rows = himopttorg_sverka_rows($data);
	$onlySiteHot = 0;
	foreach ($data["only_site"] as $r) {
		if ($r["active"] && $r["qty"] > 0) {
			$onlySiteHot++;
		}
	}
	$files = implode(" + ", array_merge($data["import_files"], $data["offers_files"]));
	$copied = $data["file_mtime"] ? date("d.m.Y H:i", $data["file_mtime"]) : "—";

	$totals =
		'<div class="totals"><div class="totals-label">Всего</div>'.
		himopttorg_sverka_card("site", $data["site_total"], "На сайте", "живой каталог из базы", "card-site").
		himopttorg_sverka_card("in_file", $data["import_total"], "В файле 1С", "папка ".HIMOPT_SVERKA_DIR, "card-file").
		"</div>";
	$story =
		'<div class="story">'.
		himopttorg_sverka_card("in_file", $data["matched"], "1. В файле", "есть и в XML, и на сайте").
		'<div class="arrow">→</div>'.
		himopttorg_sverka_card("ok", count($data["matched_ok"]), "2. Совпадает", "имя, цена и остаток одинаковые").
		'<div class="arrow">→</div>'.
		himopttorg_sverka_card("missing_file", count($data["only_site"]), "3. Нет в файле", "есть на сайте, в этой выгрузке нет · с остатком ".$onlySiteHot).
		"</div>";
	$problems =
		'<div class="problems"><div class="problems-label">Расхождения среди тех, кто есть и там и там</div><div class="problems-cards">'.
		himopttorg_sverka_card("qty", count($data["qty_diff"]), "Разный остаток", "цифры не совпали").
		himopttorg_sverka_card("price", count($data["price_diff"]), "Разная цена", "тип «Типовое соглашение опт»").
		himopttorg_sverka_card("name", count($data["name_diff"]), "Разное имя", "один GUID, разные названия").
		himopttorg_sverka_card("missing_site", count($data["only_1c"]), "Нет на сайте", "в XML есть, GUID на сайте не найден").
		"</div></div>";

	header("Content-Type: text/html; charset=utf-8");
	echo '<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Сверка 1С ↔ сайт ХИМОПТТОРГ</title>
<style>
  :root { --bg:#eef2f6; --card:#fff; --ink:#122033; --muted:#5b6777; --line:#d5dde6; --miss:#fdecea; --diff:#fff3bf; }
  * { box-sizing: border-box; }
  body { margin: 0; font: 14px/1.45 -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; background: var(--bg); color: var(--ink); }
  header { background: #16324f; color: #fff; padding: 22px 28px 18px; }
  header h1 { margin: 0 0 10px; font-size: 20px; }
  header p { margin: 0; color: #c5d4e4; font-size: 13px; }
  .nav-btns { display: flex; gap: 8px; flex-wrap: wrap; margin: 0 0 12px; }
  .nav-btns a { display: inline-block; padding: 6px 12px; border-radius: 8px; background: #2a5074; color: #fff; text-decoration: none; font-size: 13px; }
  .nav-btns a:hover { background: #3a6a96; }
  .nav-btns a.on { background: #1b6fb6; }
  .wrap { max-width: 1480px; margin: 0 auto; padding: 16px 18px 56px; }
  .legend { background: var(--card); border: 1px solid var(--line); border-radius: 10px; padding: 12px 16px; margin: 14px 0; color: var(--muted); }
  .pair { display: inline-flex; gap: 6px; align-items: center; margin-right: 16px; }
  .sw { display: inline-block; width: 12px; height: 12px; border-radius: 3px; }
  .totals, .story, .problems-cards { display: flex; gap: 10px; align-items: stretch; }
  .totals { background: var(--card); border: 1px solid var(--line); border-radius: 12px; padding: 12px; margin-bottom: 12px; }
  .totals-label, .problems-label { font-size: 12px; font-weight: 700; letter-spacing: .04em; text-transform: uppercase; color: var(--muted); align-self: center; min-width: 64px; }
  .totals .card, .story .card, .problems-cards .card { flex: 1; }
  .story { margin-bottom: 12px; }
  .arrow { align-self: center; color: #8a96a5; font-size: 22px; }
  .problems { margin-bottom: 14px; }
  .problems-label { margin: 0 0 8px; }
  .problems-cards .card { padding: 8px 10px; }
  .problems-cards .n { font-size: 20px; }
  .card { background: var(--card); border: 1px solid var(--line); border-radius: 10px; padding: 10px 12px; text-align: left; cursor: pointer; }
  .card:hover, .card.on { border-color: #1b6fb6; box-shadow: 0 0 0 2px #1b6fb633; }
  .card-site { background: #eef6fc; }
  .card-file { background: #f7f3e8; }
  .card .n { font-size: 28px; font-weight: 700; line-height: 1.1; }
  .card .t { font-weight: 650; margin-top: 4px; }
  .card .s { color: var(--muted); font-size: 12px; }
  .toolbar { display: flex; gap: 10px; align-items: center; flex-wrap: wrap; margin-bottom: 10px; }
  .toolbar input { flex: 1; min-width: 220px; padding: 8px 10px; border: 1px solid var(--line); border-radius: 8px; }
  .toolbar button { border: 1px solid var(--line); background: #fff; border-radius: 8px; padding: 8px 12px; cursor: pointer; }
  .count { color: var(--muted); }
  .board { background: var(--card); border: 1px solid var(--line); border-radius: 12px; overflow: auto; max-height: calc(100vh - 220px); }
  table { width: 100%; border-collapse: collapse; font-size: 13px; }
  th, td { border-bottom: 1px solid var(--line); text-align: left; padding: 7px 8px; vertical-align: top; }
  thead th { position: sticky; top: 0; z-index: 2; background: #e8edf3; }
  th.sortable { cursor: pointer; user-select: none; white-space: nowrap; }
  th.sortable:hover { background: #dce4ee; }
  th.sortable::after { content: " ↕"; color: #8a96a5; font-weight: 400; }
  th.sortable.asc::after { content: " ↑"; color: #16324f; }
  th.sortable.desc::after { content: " ↓"; color: #16324f; }
  td:nth-child(4), td:nth-child(6), td:nth-child(8) { background: #f3f8fc; }
  td:nth-child(5), td:nth-child(7), td:nth-child(9) { background: #faf6ea; }
  td.miss { background: var(--miss) !important; color: #8a1f13; font-weight: 650; }
  td.diff { background: var(--diff) !important; font-weight: 650; }
  tr.hot td:first-child { box-shadow: inset 3px 0 0 #e3a008; }
  td.open { white-space: nowrap; }
  .go { display: inline-block; padding: 3px 8px; margin: 0 4px 3px 0; border-radius: 6px; font-size: 11px; font-weight: 650; text-decoration: none; }
  .go-front { background: #1b6fb6; color: #fff; }
  .go-admin { background: #16324f; color: #fff; }
  .go:hover { opacity: .88; }
  a.id-link { color: #0b3d80; font-weight: 650; text-decoration: none; }
  a.name-link { color: inherit; font-weight: 650; text-decoration: none; }
  a.id-link:hover, a.name-link:hover { text-decoration: underline; }
  .badge { display: inline-block; padding: 2px 7px; border-radius: 999px; font-size: 11px; font-weight: 650; margin: 0 3px 3px 0; white-space: nowrap; }
  .b-miss { background: #f8d0cb; color: #7a160e; }
  .b-qty { background: #ffe08a; color: #6a4b00; }
  .b-price { background: #cfe3ff; color: #0b3d80; }
  .b-name { background: #e2d6ff; color: #3b1d86; }
  .b-ok { background: #d4edda; color: #155724; }
  .guid { font-size: 11px; color: #667; word-break: break-all; }
  @media (max-width: 900px) {
    .totals, .story, .problems-cards { flex-wrap: wrap; }
    .arrow { display: none; }
    .card { min-width: 46%; }
  }
</style>
</head>
<body>
<header>
  <div class="nav-btns">
    <a href="/">На сайт</a>
    <a href="/catalog/">Каталог</a>
    <a href="/bitrix/admin/">Админка</a>
    <a href="/sverka-1c.php"'.(strpos($_SERVER["SCRIPT_NAME"], "/bitrix/admin/") === false ? ' class="on"' : '').'>Сверка на сайте</a>
    <a href="/bitrix/admin/himopttorg_sverka_1c.php"'.(strpos($_SERVER["SCRIPT_NAME"], "/bitrix/admin/") !== false ? ' class="on"' : '').'>Сверка в админке</a>
  </div>
  <h1>Сверка: сайт слева · файл 1С справа</h1>
  <p>Выгрузка '.himopttorg_sverka_esc($data["formed"] ?: "—").
	' · файлы скопированы '.$copied.
	' · отчёт '.himopttorg_sverka_esc($data["generated"]).
	' · '.himopttorg_sverka_esc($files ?: HIMOPT_SVERKA_DIR).'</p>
</header>
<div class="wrap">
  '.$totals.$story.$problems.'
  <div class="legend">
    <span class="pair"><span class="sw" style="background:#d7e7f6"></span> колонки сайта (база сейчас)</span>
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
    '.himopttorg_sverka_render_table($rows).'
  </div>
</div>
<script>
const tbody = document.querySelector("#grid tbody");
const cards = [...document.querySelectorAll(".card")];
let filter = "";
let sortCol = -1;
let sortDir = 1;
function rowList() { return [...tbody.querySelectorAll("tr")]; }
function parseNum(text) {
  const t = (text || "").trim();
  if (!t || t === "—" || t.indexOf("нет ") === 0) return null;
  const n = parseFloat(t.replace(/\s/g, "").replace(",", "."));
  return Number.isFinite(n) ? n : null;
}
function apply() {
  const q = document.getElementById("q").value.trim().toLowerCase();
  const rows = rowList();
  let n = 0;
  rows.forEach(tr => {
    const kinds = (tr.dataset.kind || "").split(/\s+/);
    const okKind = !filter || (filter === "diffs" ? kinds.some(k => ["qty","price","name","missing_file","missing_site"].includes(k)) : kinds.includes(filter));
    const okQ = !q || (tr.dataset.text || tr.innerText.toLowerCase()).includes(q);
    const show = okKind && okQ;
    tr.style.display = show ? "" : "none";
    if (show) n++;
  });
  document.getElementById("count").textContent = "Показано " + n + " из " + rows.length;
  cards.forEach(b => b.classList.toggle("on", b.dataset.filter === filter && filter && filter !== "diffs"));
}
function sortBy(col, type) {
  if (sortCol === col) sortDir *= -1;
  else { sortCol = col; sortDir = 1; }
  document.querySelectorAll("#grid thead th").forEach((th, i) => {
    th.classList.toggle("asc", i === col && sortDir === 1);
    th.classList.toggle("desc", i === col && sortDir === -1);
  });
  rowList().sort((a, b) => {
    const ta = a.children[col].innerText.trim();
    const tb = b.children[col].innerText.trim();
    if (type === "num") {
      const na = parseNum(ta), nb = parseNum(tb);
      if (na === null && nb === null) return 0;
      if (na === null) return 1;
      if (nb === null) return -1;
      return (na - nb) * sortDir;
    }
    return ta.localeCompare(tb, "ru", {numeric: true, sensitivity: "base"}) * sortDir;
  }).forEach(tr => tbody.appendChild(tr));
  apply();
}
cards.forEach(btn => btn.addEventListener("click", () => {
  filter = filter === btn.dataset.filter ? "" : btn.dataset.filter;
  apply();
}));
document.querySelectorAll("#grid thead th.sortable").forEach((th, i) => {
  th.addEventListener("click", () => sortBy(i, th.dataset.type || "text"));
});
document.getElementById("q").addEventListener("input", apply);
document.getElementById("all").addEventListener("click", () => { filter = ""; document.getElementById("q").value = ""; apply(); });
document.getElementById("diffs").addEventListener("click", () => { filter = "diffs"; apply(); });
apply();
</script>
</body>
</html>';
}

(function (document) {
	function digits(value) {
		return String(value || "").replace(/\D+/g, "");
	}

	function normalize(value) {
		var d = digits(value);
		if (!d) {
			return "";
		}
		if (d.length === 11 && (d.charAt(0) === "8" || d.charAt(0) === "7")) {
			return "7" + d.slice(1);
		}
		if (d.length === 10) {
			return "7" + d;
		}
		return "";
	}

	function format(d) {
		if (!d || d.length !== 11 || d.charAt(0) !== "7") {
			return d || "";
		}
		return "+7 (" + d.slice(1, 4) + ") " + d.slice(4, 7) + "-" + d.slice(7, 9) + "-" + d.slice(9, 11);
	}

	function maskInput(field) {
		var d = digits(field.value);
		if (d.charAt(0) === "8") {
			d = "7" + d.slice(1);
		}
		if (d.length && d.charAt(0) !== "7") {
			d = "7" + d;
		}
		d = d.slice(0, 11);
		var out = "+7";
		if (d.length > 1) {
			out += " (" + d.slice(1, Math.min(4, d.length));
		}
		if (d.length >= 4) {
			out += ")";
		}
		if (d.length > 4) {
			out += " " + d.slice(4, Math.min(7, d.length));
		}
		if (d.length > 7) {
			out += "-" + d.slice(7, Math.min(9, d.length));
		}
		if (d.length > 9) {
			out += "-" + d.slice(9, 11);
		}
		field.value = out;
	}

	function errorBox(field) {
		var row = field.parentNode;
		if (!row) {
			return null;
		}
		return row.querySelector(".himopt-phone-error");
	}

	function markError(field, message) {
		if ((" " + field.className + " ").indexOf(" is-error ") === -1) {
			field.className += (field.className ? " " : "") + "is-error";
		}
		var box = errorBox(field);
		if (box) {
			if (message) {
				box.innerHTML = message;
			}
			box.hidden = false;
			box.style.display = "block";
		}
	}

	function clearError(field) {
		field.className = String(field.className || "").replace(/\bis-error\b/g, "").replace(/\s+/g, " ").replace(/^\s+|\s+$/g, "");
		var box = errorBox(field);
		if (box) {
			box.hidden = true;
			box.style.display = "none";
		}
	}

	function validatePhone(field, requireFilled) {
		var raw = String(field.value || "").replace(/\s+/g, "");
		if (!raw || raw === "+7" || raw === "+7(") {
			if (requireFilled) {
				markError(field, "Заполните телефон в формате +7 (999) 123-45-67");
				return false;
			}
			clearError(field);
			return true;
		}
		var n = normalize(field.value);
		if (!n) {
			markError(field, "Некорректный телефон. Нужен номер: +7 (999) 123-45-67");
			return false;
		}
		field.value = format(n);
		clearError(field);
		return true;
	}

	function bindPhone(field) {
		if (field.getAttribute("data-himopt-phone") === "1") {
			return;
		}
		field.setAttribute("data-himopt-phone", "1");
		if (field.value) {
			var n = normalize(field.value);
			if (n) {
				field.value = format(n);
			}
		} else {
			field.value = "+7 (";
		}
		function onInput() {
			maskInput(field);
			clearError(field);
		}
		if (field.addEventListener) {
			field.addEventListener("focus", function () {
				if (!digits(field.value)) {
					field.value = "+7 (";
				}
			}, false);
			field.addEventListener("input", onInput, false);
			field.addEventListener("blur", function () {
				validatePhone(field, false);
			}, false);
		} else {
			field.onkeyup = onInput;
		}
	}

	function fieldLabel(field) {
		var td = field;
		while (td && td.tagName !== "TR") {
			td = td.parentNode;
		}
		if (!td) {
			return "";
		}
		var labelTd = td.cells && td.cells[0] ? td.cells[0] : td.querySelector("td");
		return labelTd ? String(labelTd.innerText || labelTd.textContent || "").replace(/\s+/g, " ").replace(/^\s+|\s+$/g, "") : "";
	}

	function markFieldError(field) {
		if ((" " + field.className + " ").indexOf(" is-error ") === -1) {
			field.className += (field.className ? " " : "") + "is-error";
		}
	}

	function highlightFromErrors() {
		var err = document.querySelector(".errortext, font.errortext");
		var text = err ? (err.innerText || err.textContent || "") : "";
		if (!text) {
			return;
		}
		var form = document.querySelector('form[name="order_form"]');
		if (!form) {
			return;
		}
		var phones = form.querySelectorAll(".himopt-order-phone");
		var i;
		if (/Телефон/i.test(text) || /телефон/i.test(text)) {
			for (i = 0; i < phones.length; i++) {
				validatePhone(phones[i], true);
			}
			return;
		}
		// Bitrix: Не заполнено поле "Адрес доставки". — только это поле, не «Юридический адрес»
		var quoted = text.match(/[«"„]([^«»"„]+)[»"“]/);
		var want = quoted ? String(quoted[1] || "").replace(/:$/, "").replace(/^\s+|\s+$/g, "") : "";
		if (!want) {
			return;
		}
		var fields = form.querySelectorAll("input.himopt-auth-field, textarea.himopt-auth-field, textarea.himopt-order-textarea");
		for (i = 0; i < fields.length; i++) {
			var label = fieldLabel(fields[i]);
			if (!label) {
				continue;
			}
			// label like "Адрес доставки:*" must start with / contain the exact prop name
			if (label.indexOf(want) === 0 || label.indexOf(want + ":") === 0 || label.indexOf(want + " :") === 0) {
				markFieldError(fields[i]);
			}
		}
	}

	function onSubmit(e) {
		var form = e.target || e.srcElement;
		if (!form || form.getAttribute("name") !== "order_form") {
			return true;
		}
		var back = form.querySelector('input[name="BACK"]');
		if (back && back.value === "Y") {
			return true;
		}
		var phones = form.querySelectorAll(".himopt-order-phone");
		var i, ok = true;
		for (i = 0; i < phones.length; i++) {
			if (phones[i].offsetWidth === 0 && phones[i].offsetHeight === 0) {
				continue;
			}
			if (!validatePhone(phones[i], true)) {
				ok = false;
			}
		}
		if (!ok) {
			if (e.preventDefault) {
				e.preventDefault();
			}
			e.returnValue = false;
			if (phones[0] && phones[0].focus) {
				phones[0].focus();
			}
			return false;
		}
		return true;
	}

	function init() {
		var phones = document.querySelectorAll(".himopt-order-phone");
		var i;
		for (i = 0; i < phones.length; i++) {
			bindPhone(phones[i]);
		}
		highlightFromErrors();
		var form = document.querySelector('form[name="order_form"]');
		if (form && form.getAttribute("data-himopt-order") !== "1") {
			form.setAttribute("data-himopt-order", "1");
			if (form.addEventListener) {
				form.addEventListener("submit", onSubmit, false);
			} else {
				form.onsubmit = onSubmit;
			}
		}
	}

	if (document.readyState === "complete" || document.readyState === "interactive") {
		setTimeout(init, 0);
	} else if (document.addEventListener) {
		document.addEventListener("DOMContentLoaded", init, false);
		window.addEventListener("load", init, false);
	} else if (window.attachEvent) {
		window.attachEvent("onload", init);
	} else {
		init();
	}
})(document);

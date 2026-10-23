(function (document) {
	function syncBox(box) {
		var form = box.form;
		if (!form) {
			return;
		}
		var submits = form.querySelectorAll(".himopt-need-consent");
		var i;
		for (i = 0; i < submits.length; i++) {
			submits[i].disabled = !box.checked;
		}
	}

	function bind(box) {
		if (box.addEventListener) {
			box.addEventListener("change", function () { syncBox(box); }, false);
			box.addEventListener("click", function () { syncBox(box); }, false);
		} else {
			box.onchange = function () { syncBox(box); };
		}
		syncBox(box);
	}

	function clearError(field) {
		field.className = String(field.className || "").replace(/\bis-error\b/g, "").replace(/\s+/g, " ").replace(/^\s+|\s+$/g, "");
		var row = field.parentNode;
		if (row && row.className && (" " + row.className + " ").indexOf(" himopt-auth-row ") !== -1) {
			row.className = String(row.className || "").replace(/\bis-error\b/g, "").replace(/\s+/g, " ").replace(/^\s+|\s+$/g, "");
		}
	}

	function markError(field) {
		if ((" " + field.className + " ").indexOf(" is-error ") === -1) {
			field.className += (field.className ? " " : "") + "is-error";
		}
		var row = field.parentNode;
		if (row && (" " + row.className + " ").indexOf(" himopt-auth-row ") !== -1) {
			if ((" " + row.className + " ").indexOf(" is-error ") === -1) {
				row.className += (row.className ? " " : "") + "is-error";
			}
		}
		if (field.addEventListener) {
			field.addEventListener("input", function () { clearError(field); }, false);
			field.addEventListener("change", function () { clearError(field); }, false);
		}
	}

	function markEmptyInForm(form, mode) {
		var fields = form.querySelectorAll(".himopt-auth-field");
		var i, field, val, required, name;
		for (i = 0; i < fields.length; i++) {
			field = fields[i];
			if (field.offsetWidth === 0 && field.offsetHeight === 0) {
				continue;
			}
			val = field.value ? String(field.value).replace(/^\s+|\s+$/g, "") : "";
			name = field.getAttribute("name") || "";
			required = false;
			if (mode === "auth") {
				required = name === "USER_LOGIN" || name === "USER_PASSWORD";
			} else if (mode === "reg") {
				if (field.parentNode) {
					required = (field.parentNode.innerHTML || "").indexOf("sof-req") !== -1
						|| (field.parentNode.textContent || "").indexOf("*") !== -1;
				}
			} else {
				required = name === "USER_LOGIN" || name === "USER_PASSWORD"
					|| name === "USER_EMAIL" || name === "USER_NAME" || name === "USER_LAST_NAME"
					|| name === "USER_CONFIRM_PASSWORD"
					|| (field.parentNode && (
						(field.parentNode.innerHTML || "").indexOf("sof-req") !== -1
						|| (field.parentNode.textContent || "").indexOf("*") !== -1
					));
			}
			if (required && !val) {
				markError(field);
			}
		}
	}

	function highlightEmptyRequired() {
		var errNode = document.querySelector(".himopt-order-auth .errortext, .himopt-auth .errortext, font.errortext, .errortext");
		var errText = errNode ? (errNode.innerText || errNode.textContent || "") : "";
		if (!errText) {
			return;
		}

		var authForm = document.querySelector('form[name="order_auth_form"], form[name="form_auth"]');
		var regForm = document.querySelector('form[name="order_reg_form"], form[name="bform"], .himopt-auth--wide form');
		var low = errText.toLowerCase();
		var isRegErr = low.indexOf("регистрац") !== -1;
		var isAuthErr = low.indexOf("авториз") !== -1;

		if (isAuthErr && authForm) {
			markEmptyInForm(authForm, "auth");
			return;
		}
		if (isRegErr && regForm) {
			markEmptyInForm(regForm, "reg");
			return;
		}

		/* single-form pages (login / register / forgot) */
		if (authForm && !regForm) {
			markEmptyInForm(authForm, "auth");
			return;
		}
		if (regForm && !authForm) {
			markEmptyInForm(regForm, "reg");
		}
	}

	function bindFieldFocus(field) {
		if (field.getAttribute("data-himopt-focus") === "1") {
			return;
		}
		field.setAttribute("data-himopt-focus", "1");
		function on() {
			if ((" " + field.className + " ").indexOf(" is-focus ") === -1) {
				field.className += (field.className ? " " : "") + "is-focus";
			}
		}
		function off() {
			field.className = String(field.className || "").replace(/\bis-focus\b/g, "").replace(/\s+/g, " ").replace(/^\s+|\s+$/g, "");
		}
		if (field.addEventListener) {
			field.addEventListener("focus", on, false);
			field.addEventListener("focusin", on, false);
			field.addEventListener("blur", off, false);
			field.addEventListener("focusout", off, false);
		} else {
			field.onfocus = on;
			field.onblur = off;
		}
	}

	function initFields() {
		var fields = document.querySelectorAll(".himopt-auth-field");
		var i;
		for (i = 0; i < fields.length; i++) {
			bindFieldFocus(fields[i]);
		}
	}

	var inited = false;
	function init() {
		var boxes = document.querySelectorAll(".himopt-consent-check");
		var i;
		for (i = 0; i < boxes.length; i++) {
			if (boxes[i].getAttribute("data-himopt-bound") === "1") {
				continue;
			}
			boxes[i].setAttribute("data-himopt-bound", "1");
			bind(boxes[i]);
		}
		initFields();
		if (!inited) {
			inited = true;
			highlightEmptyRequired();
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
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

	function init() {
		var boxes = document.querySelectorAll(".himopt-consent-check");
		var i;
		for (i = 0; i < boxes.length; i++) {
			bind(boxes[i]);
		}
	}

	if (document.addEventListener) {
		document.addEventListener("DOMContentLoaded", init, false);
	} else if (window.attachEvent) {
		window.attachEvent("onload", init);
	} else {
		init();
	}
})(document);
(function (window, document) {
	if (window.himoptAdd2Basket) {
		return;
	}

	var lock = false;

	function sessid() {
		if (window.himoptSessid) {
			return window.himoptSessid;
		}
		if (window.BX && BX.bitrix_sessid) {
			return BX.bitrix_sessid();
		}
		var fields = document.getElementsByName("sessid");
		if (fields.length && fields[0].value) {
			return fields[0].value;
		}
		return "";
	}

	function esc(s) {
		return String(s == null ? "" : s)
			.replace(/&/g, "&amp;")
			.replace(/</g, "&lt;")
			.replace(/>/g, "&gt;")
			.replace(/"/g, "&quot;");
	}

	function notify(opts) {
		var isError = !!(opts && opts.error);
		var title = isError ? "Не добавлено" : "Добавлено в корзину";
		var text = opts && opts.text ? opts.text : "";
		var name = opts && opts.name ? opts.name : "";
		var sum = opts && typeof opts.sum !== "undefined" ? opts.sum : null;
		var box = document.getElementById("himopt-basket-toast");
		if (!box) {
			box = document.createElement("div");
			box.id = "himopt-basket-toast";
			document.body.appendChild(box);
		}
		var html = '<div class="himopt-toast-inner">'
			+ '<div class="himopt-toast-ico" aria-hidden="true"></div>'
			+ '<div class="himopt-toast-body">'
			+ '<div class="himopt-toast-title">' + esc(title) + "</div>";
		if (name) {
			html += '<div class="himopt-toast-name">' + esc(name) + "</div>";
		} else if (text) {
			html += '<div class="himopt-toast-name">' + esc(text) + "</div>";
		}
		if (!isError && sum !== null) {
			html += '<div class="himopt-toast-sum">Сумма заказа: <b>' + esc(sum) + " Р</b></div>";
		}
		if (!isError) {
			html += '<a class="himopt-toast-link" href="/personal/cart/">Перейти в корзину</a>';
		}
		html += "</div></div>";
		box.innerHTML = html;
		box.className = isError ? "is-error is-show" : "is-show";
		clearTimeout(notify._t);
		notify._t = setTimeout(function () {
			box.className = isError ? "is-error" : "";
		}, 4500);
	}

	function updateHeader(sum) {
		var old = document.querySelector(".basket_block");
		if (!old) {
			return;
		}
		var wrap = document.createElement("div");
		wrap.innerHTML = ""
			+ '<a class="basket_block" href="/personal/cart/">'
			+ '<span class="basket">'
			+ '<span class="basket-line">Ваш заказ на сумму</span>'
			+ '<span class="basket-sum"><b>' + sum + " Р</b></span>"
			+ '<span class="offer">сделать заказ</span>'
			+ "</span></a>";
		old.parentNode.replaceChild(wrap.firstChild, old);
	}

	function postAdd(id, qty, onDone) {
		var body = "himopt_ajax=add2basket"
			+ "&sessid=" + encodeURIComponent(sessid())
			+ "&id=" + encodeURIComponent(id)
			+ "&quantity=" + encodeURIComponent(qty);
		var xhr = new XMLHttpRequest();
		xhr.open("POST", window.location.pathname, true);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
		xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
		xhr.onreadystatechange = function () {
			if (xhr.readyState !== 4) {
				return;
			}
			var res = null;
			try {
				res = JSON.parse(xhr.responseText);
			} catch (e) {
				res = null;
			}
			onDone(res, xhr.status);
		};
		xhr.send(body);
	}

	window.himoptAdd2Basket = function (id, qtyFieldId) {
		if (lock) {
			return false;
		}
		id = parseInt(id, 10);
		if (!id) {
			return false;
		}
		var qty = 1;
		var field = document.getElementById(qtyFieldId || ("P_" + id));
		if (field && field.value) {
			qty = parseInt(field.value, 10) || 1;
		}
		if (qty < 1) {
			qty = 1;
		}
		lock = true;
		postAdd(id, qty, function (res, status) {
			lock = false;
			if (res && res.ok) {
				notify({
					name: res.name || res.message || "Товар",
					sum: typeof res.sum !== "undefined" ? res.sum : null
				});
				if (typeof res.sum !== "undefined") {
					updateHeader(res.sum);
				}
			} else if (res && res.error) {
				notify({ error: true, text: res.error });
			} else {
				notify({ error: true, text: "Не удалось добавить товар" });
			}
		});
		return false;
	};
})(window, document);
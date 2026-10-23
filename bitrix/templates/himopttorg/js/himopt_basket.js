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

	function notify(text, isError) {
		var box = document.getElementById("himopt-basket-toast");
		if (!box) {
			box = document.createElement("div");
			box.id = "himopt-basket-toast";
			document.body.appendChild(box);
		}
		box.className = isError ? "is-error is-show" : "is-show";
		box.innerHTML = "";
		box.appendChild(document.createTextNode(text));
		clearTimeout(notify._t);
		notify._t = setTimeout(function () {
			box.className = isError ? "is-error" : "";
		}, 4000);
	}

	function updateHeader(sum) {
		var old = document.querySelector(".basket_block");
		if (!old) {
			return;
		}
		var wrap = document.createElement("div");
		wrap.innerHTML = ""
			+ '<div class="basket_block">'
			+ '<div class="basket">'
			+ "<p>Ваш заказ на сумму</p>"
			+ "<p><b>" + sum + " Р</b></p>"
			+ '<p class="offer"><a href="/personal/cart/">сделать заказ</a></p>'
			+ "</div></div>";
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
				notify(res.message || "Товар добавлен в корзину");
				if (typeof res.sum !== "undefined") {
					updateHeader(res.sum);
				}
			} else if (res && res.error) {
				notify(res.error, true);
			} else {
				notify(status === 200 ? "Не удалось добавить товар" : "Не удалось добавить товар", true);
			}
		});
		return false;
	};
})(window, document);
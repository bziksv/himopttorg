<?php
$message = "Здравствуйте,
<br /><br />
<div><b>Имя:</b> {$_POST['name']}</div>
<div><b>Компания:</b> {$_POST['company']}</div>
<div><b>E-mail:</b> {$_POST['mail']}</div>
<div><b>Телефон:</b> {$_POST['phone']}</div>
<div><b>Сообщение:</b></div>
<div>{$_POST['msg']}</div>

<font color=\"gray\"><br />
<br />-- 
<br />IP: {$_SERVER['REMOTE_ADDR']}
</font>";

if ($_SERVER ['REQUEST_METHOD'] == 'POST' && isset ($_GET['send']) && $_GET['send'] == 'yes') {
	
	if(empty($_POST['g-recaptcha-response'])){
		$error .= 'Необходимо указать reCAPTCHA<br />';
	}
	//Мыло
	if (! isset ( $_POST ["mail"] ) || ! eregi ( "^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$", $_POST ["mail"] )) {
		$error .= 'Некорректный e-mail.<br />';
	}
	//Имя
	if (trim ( strlen ( $_POST ["name"] ) ) == 0) {
		$error .= 'Необходимо указать Ваше имя.<br />';
	} else {
		$_POST ["name"] = htmlspecialchars ( $_POST ["name"], ENT_QUOTES );
	}
	//Телефон
	if (trim ( strlen ( $_POST ["phone"] ) ) == 0) {
		$error .= 'Необходимо указать Ваш телефон.<br />';
	} else {
		$_POST ["phone"] = htmlspecialchars ( $_POST ["phone"], ENT_QUOTES );
	}
	//Сообщение
	if (trim ( strlen ( $_POST ["msg"] ) ) == 0) {
		$error .= 'Необходимо написать текст сообщения.<br />';
	} else {
		$_POST ["msg"] = htmlspecialchars ( $_POST ["msg"], ENT_QUOTES );
	}
	
	
	$_POST ["company"] = htmlspecialchars ( $_POST ["company"], ENT_QUOTES );
	
	if (empty ( $error )) {
		
		mailsend ( "Обратная связь", 'hot@hot.vrn.ru, sma@hot.vrn.ru', $message );
		$message2 = 'Ваше письмо успешно отправленно.';
		unset ( $_POST );
		$_POST = array ();
	}

}

function mailsend($subj, $to, $msg) {
	/**
	 * Обработка темы письма
	 */
	//$subject = $subj;
	$subject = '=?UTF-8?B?' . base64_encode(iconv('CP1251','UTF-8', $subj)) . '?=';
	/**
	 * Заголовки
	 */
	$headers = array ();
	$headers ['mime'] = "MIME-Version: 1.0\r\n";
	$headers ['from'] = "From: \"=?UTF-8?B?" . base64_encode ( iconv('CP1251','UTF-8', "ХИМОПТТОРГ") ) . "?=\" <no_reply@{$_SERVER['HTTP_HOST']}>\r\n";
	$headers ['reply_to'] = "Reply-to: no_reply@{$_SERVER['HTTP_HOST']}\r\n";
	$headers ['content_type'] = "Content-Type: text/html; charset=utf-8\r\n";
	$headers ['content_transfer_encoding'] = "Content-Transfer-Encoding: 8bit\r\n";
	$headers ['priority'] = "X-Priority: 1 (Higuest)\n";
	$headers ['msmail-priority'] = "X-MSMail-Priority: High\n";
	$headers ['importance'] = "Importance: High\n";
	$headers ['return-path'] = "Return-Path: no_reply@{$_SERVER['HTTP_HOST']}\r\n";
	$headers ['x-mailer'] = "X-Mailer: PHP Mailer\n";
	$header = '';
	foreach ( $headers as $val )
		$header .= $val;
	
	/**
	 * Отправка письма
	 */
	mail ( $to, $subject, iconv('CP1251','UTF-8', $msg), $header );
}

?>
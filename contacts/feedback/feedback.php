<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['send']) && $_GET['send'] == 'yes') {

	$name = trim((string)($_POST['name'] ?? ''));
	$company = trim((string)($_POST['company'] ?? ''));
	$mail = trim((string)($_POST['mail'] ?? ''));
	$phone = trim((string)($_POST['phone'] ?? ''));
	$msg = trim((string)($_POST['msg'] ?? ''));

	if (($_POST['RULE'] ?? '') !== 'Y') {
		$error .= 'Необходимо дать согласие на обработку персональных данных.<br />';
	}
	if ($mail === '' || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		$error .= 'Некорректный e-mail.<br />';
	}
	if ($name === '') {
		$error .= 'Необходимо указать Ваше имя.<br />';
	}
	if ($phone === '') {
		$error .= 'Необходимо указать Ваш телефон.<br />';
	}
	if ($msg === '') {
		$error .= 'Необходимо написать текст сообщения.<br />';
	}

	$_POST['name'] = $name;
	$_POST['company'] = $company;
	$_POST['mail'] = $mail;
	$_POST['phone'] = $phone;
	$_POST['msg'] = $msg;

	if ($error === '') {
		$safeName = htmlspecialchars($name, ENT_QUOTES);
		$safeCompany = htmlspecialchars($company, ENT_QUOTES);
		$safeMail = htmlspecialchars($mail, ENT_QUOTES);
		$safePhone = htmlspecialchars($phone, ENT_QUOTES);
		$safeMsg = nl2br(htmlspecialchars($msg, ENT_QUOTES));
		$message = "Здравствуйте,
<br /><br />
<div><b>Имя:</b> {$safeName}</div>
<div><b>Компания:</b> {$safeCompany}</div>
<div><b>E-mail:</b> {$safeMail}</div>
<div><b>Телефон:</b> {$safePhone}</div>
<div><b>Сообщение:</b></div>
<div>{$safeMsg}</div>

<font color=\"gray\"><br />
<br />--
<br />IP: {$_SERVER['REMOTE_ADDR']}
</font>";

		mailsend('Обратная связь', 'hot@hot.vrn.ru, sma@hot.vrn.ru', $message);
		$message2 = 'Ваше письмо успешно отправленно.';
		$_POST = array();
	}
}

function himopt_feedback_mime($str)
{
	return '=?UTF-8?B?' . base64_encode($str) . '?=';
}

function mailsend($subj, $to, $msg)
{
	$host = (string)$_SERVER['HTTP_HOST'];
	$headers = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = 'From: "'.himopt_feedback_mime('ХИМОПТТОРГ').'" <no_reply@'.$host.'>';
	$headers[] = "Reply-to: no_reply@".$host;
	$headers[] = "Content-Type: text/html; charset=utf-8";
	$headers[] = "Content-Transfer-Encoding: 8bit";
	$headers[] = "X-Mailer: PHP Mailer";

	mail($to, himopt_feedback_mime($subj), $msg, implode("\r\n", $headers));
}

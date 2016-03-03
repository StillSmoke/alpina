<?php
$name = trim(htmlentities($_POST['clientName']));
$phone = trim(htmlentities($_POST['clientPhone']));

if(empty($name) || empty($phone)){
	header('Refresh:2; url=http://alpina.webservis.ru');
	echo 'Вы не заполнили поля!';
	exit;
}
echo $name . '<br>' . $phone;
if($name=='Ваше имя' || $phone=='Номер телефона'){
	header('Refresh:2; url=http://alpina.webservis.ru');
	echo 'Вы не заполнили поля!';
	exit;
}

// $strTo = 'still.smoke@bk.ru';
// $subject = "New order";
$message = 'Имя - ' . $name . '. Телефон - ' . $phone . '.';
// $headers= "MIME-Version: 1.0\r\n";
// $headers .= "Content-type: text/html; charset=utf-8\r\n";
// $headers .= "From: New order <alpina@webservis.ru>\r\n";
// $result = mail($strTo, $subject, $message, $headers);

$result = mail("still.smoke@bk.ru", "New order", $message, "From: alpina@webservis.ru\r\n"."Reply-To: alpina@webservis.ru\r\n"."X-Mailer: PHP/". phpversion());

if($result){
echo "Письмо успешно отправлено";
}else{
echo "Письмо не отправлено. Этот поганый бесплатный хостинг не поддерживает smtp :(";
}

?>
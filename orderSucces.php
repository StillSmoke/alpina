<?php
header('Content-Type: text/html; charset=utf-8');
echo "Вы ввели имя ".$_POST['clientName']."<br>"; 
echo "Вы ввели контактный телефон ".$_POST['clientPhone']."<br>"; 
$name = htmlentities($_POST['clientName']);
$phone = htmlentities($_POST['clientPhone']);
echo $name . $phone;
?>
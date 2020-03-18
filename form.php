<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);

mail("nikipeshui@yandex.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: nikipeshui@gmail.com \r\n");
?>

<?php
/*
// работа с данным скриптом показана в видео на сайте http://rek9.ru/otpravka-zayavok-v-google-forms/
// формируем запись в таблицу google (изменить)
$url = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSc4zgkI7JZKLZEMD1vhiqar4Gpmv5irgIbn1o5QyufjuYPMkw/formResponse";
// сохраняем url, с которого была отправлена форма в переменную utm
$utm = $_SERVER["HTTP_REFERER"];
// ссылка для переадресации (изменить)
$link = "http://s97762ev.beget.tech/";

// массив данных (изменить entry, draft и fbzx)
$post_data = array (
 "entry.1034466875" => $_POST['name'],
// "entry.1968799450" => $_POST['phone'],
 "entry.1025453398" => $_POST['email'],
 "entry.816936511" => $utm,
 "draftResponse" => "[null,null,"1037327885130525849"]",
 "pageHistory" => "0",
 "fbzx" => "1037327885130525849"
);

// Далее не трогать
// с помощью CURL заносим данные в таблицу google
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// указываем, что у нас POST запрос
curl_setopt($ch, CURLOPT_POST, 1);
// добавляем переменные
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//заполняем таблицу google
$output = curl_exec($ch);
curl_close($ch);

//перенаправляем браузер пользователя на скачивание оффера по нашей ссылке
header('Location: '.$link);
?>
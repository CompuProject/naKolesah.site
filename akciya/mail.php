<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";

$post_data = $_GET;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <akciya@nakolesah.site>' . "\r\n";

$subject = "\"Акция\" Сообщение с посадочной страницы - 'Записаться на диагностику бесплатно'";
$message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
mail($to, $subject, $message, $headers);
addFormDataToTheDatabase('Записаться на диагностику бесплатно',$post_data['phone'],$post_data['urlName']);

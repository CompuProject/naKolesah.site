<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <order@salesgenerator.pro>' . "\r\n";

switch ($post_data['type']) {
    case 'callback-top':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = 'Номер телефона клиента:'.$post_data['phone'];
        addFormDataToTheDatabase('Форма заказа обратного звонка',$toBd,'shini');
        echo json_encode(['callback' => true]);
        break;
    case 'get-tyres':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Форма заказа шин'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = 'Номер телефона клиента:'.$post_data['phone'];
        addFormDataToTheDatabase('Форма заказа шин',$toBd,'shini');
        echo json_encode(['callback' => true]);
        break;
    case 'left-widget-get-tyres':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Заказ шин из левого виджета'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = 'Номер телефона клиента:'.$post_data['phone'];
        addFormDataToTheDatabase('Заказ шин из левого виджета',$toBd,'shini');
        echo json_encode(['callback' => true]);
        break;
    case 'check-variants':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Подбор дисков по марке авто'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><p>Марка автомобиля: <b>'.$post_data['car'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = 'Номер телефона клиента:'.$post_data['phone'];
        $toBd .= 'Марка автомобиля:'.$post_data['car'];
        addFormDataToTheDatabase('Подбор дисков по марке авто',$toBd,'shini');
        echo json_encode(['callback' => true]);
        break;
    case 'tire-fitting':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Заявка на подобор шин'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = 'Номер телефона клиента:'.$post_data['phone'];
        addFormDataToTheDatabase('Заявка на подобор шин',$toBd,'shini');
        echo json_encode(['callback' => true]);
        break;
    case 'store-amount':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Наличие мест на складе'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = 'Номер телефона клиента:'.$post_data['phone'];
        addFormDataToTheDatabase('Наличие мест на складе',$toBd,'shini');
        echo json_encode(['callback' => true]);
        break;
    case 'check-variants-two':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ АВТО'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = 'Номер телефона клиента:'.$post_data['phone'];
        addFormDataToTheDatabase('ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ АВТО',$toBd,'shini');
        echo json_encode(['callback' => true]);
        break;
    case 'callback-bottom':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Заказ обратного звонка из футера'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = 'Номер телефона клиента:'.$post_data['phone'];
        addFormDataToTheDatabase('Заказ обратного звонка из футера',$toBd,'shini');
        echo json_encode(['callback' => true]);
        break;
    case 'modal7':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";

$post_data = $_GET;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <sceplenie-zamena@nakolesah.site>' . "\r\n";


switch ($post_data['modalName']) {
    case 'headerCallBack':
        $subject = "\"Замена сцепления\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'availability_at_the_store':
        $subject = "\"Замена сцепления\" Сообщение с Лендинга - 'Узнать стоиомость замены сцепления для моего авто'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Узнать стоиомость замены сцепления для моего авто',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'cost':
        $subject = "\"Замена сцепления\" Сообщение с Лендинга - 'Записаться на диагностику'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        $message .= '<p>Диаметр диска: <b>'.$post_data['year'].'</b></p>';
        $message .= '<p>Замена всего узла или отдельной запчасти: <b>'.$post_data['detail'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Узнать предварительную стоимость',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'diagnostic':
        $subject = "\"Замена сцепления\" Сообщение с Лендинга - 'Записаться на диагностику'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться на диагностику',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'consult':
        $subject = "\"Замена сцепления\" Сообщение с Лендинга - 'Бесплатная консультация'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Бесплатная консультация',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'dateTime':
        $subject = "\"Замена сцепления\" Сообщение с Лендинга - 'Записаться на удобное время'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Удобное время: <b>'.$post_data['date'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться на удобное время',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'fakeRoistat_modal':
        $subject = "\"Замена сцепления\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}
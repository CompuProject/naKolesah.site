<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";

$post_data = $_GET;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <zamena-masel@nakolesah.site>' . "\r\n";


switch ($post_data['modalId']) {
    case 'modal1':
        $subject = "\"Замена масел\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = 'Номер телефона клиента:'.$post_data['phone'];
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal2':
        $subject = "\"Замена масел\" Сообщение с Лендинга - 'Расчитать точную стоимость'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = "Номер телефона клиента:".$post_data['phone']."/n";
        $toBd .= "Бренд авто:".$post_data['brand']."/n";
        addFormDataToTheDatabase('Расчитать точную стоимость',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal3':
        $subject = "\"Замена масел\" Сообщение с Лендинга - 'Подобрать диски'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        $message .= '<p>Диаметр диска: <b>'.$post_data['diameter'].'</b></p>';
        $message .= '<p>Предполагаемая цена: <b>'.$post_data['price'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = "Номер телефона клиента:".$post_data['phone']."/n";
        $toBd .= "Бренд авто:".$post_data['brand']."/n";
        $toBd .= "Диаметр диска:".$post_data['diameter']."/n";
        $toBd .= "Предполагаемая цена:".$post_data['price']."/n";
        addFormDataToTheDatabase('Подобрать диски',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal4':
        $subject = "\"Замена масел\" Сообщение с Лендинга - 'Быстрая запись онлайн'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = "Номер телефона клиента:".$post_data['phone']."/n";
        addFormDataToTheDatabase('Быстрая запись онлайн',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal5':
        $subject = "\"Замена масел\" Сообщение с Лендинга - 'Форма заказа обратного звонка, виджет слева'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = "Номер телефона клиента:".$post_data['phone'];
        addFormDataToTheDatabase('Форма заказа обратного звонка, виджет слева',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal6':
        $subject = "\"Замена масел\" Сообщение с Лендинга - 'Подобрать диски внизу страницы'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        $message .= '<p>Диаметр диска: <b>'.$post_data['diameter'].'</b></p>';
        $message .= '<p>Предполагаемая цена: <b>'.$post_data['price'].'</b></p>';
        mail($to, $subject, $message, $headers);
        $toBd = "Номер телефона клиента:".$post_data['phone']."/n";
        $toBd .= "Бренд авто:".$post_data['brand']."/n";
        $toBd .= "Диаметр диска:".$post_data['diameter']."/n";
        $toBd .= "Предполагаемая цена:".$post_data['price']."/n";
        addFormDataToTheDatabase('Подобрать диски внизу страницы',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
}
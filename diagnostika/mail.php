<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";

$post_data = $_GET;
$to = 'order@salesgenerator.pro, sales-kolesa@yandex.ru'; /*, */
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <diagnostika@nakolesah.site>' . "\r\n";


switch ($post_data['modalId']) {
    case 'modal1':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal2':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Записаться на диагностику в удобное время'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        addFormDataToTheDatabase('Записаться на диагностику в удобное время',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal3':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Подобрать диски'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        $message .= '<p>Диаметр диска: <b>'.$post_data['diameter'].'</b></p>';
        $message .= '<p>Предполагаемая цена: <b>'.$post_data['price'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Подобрать диски',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal4':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Приобрести стильные диски в рассрочку'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Приобрести стильные диски в рассрочку',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal5':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Форма заказа обратного звонка, виджет слева'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal6':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Подобрать диски внизу страницы'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        $message .= '<p>Диаметр диска: <b>'.$post_data['diameter'].'</b></p>';
        $message .= '<p>Предполагаемая цена: <b>'.$post_data['price'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Подобрать диски внизу страницы',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
}
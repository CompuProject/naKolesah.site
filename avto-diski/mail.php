<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";

$post_data = $_GET;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <avto-diski@nakolesah.site>' . "\r\n";


switch ($post_data['modalId']) {
    case 'modal1':
        $subject = "\"Авто-Диски\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal2':
        $subject = "\"Авто-Диски\" Сообщение с Лендинга - 'Проверить наличие дисков для моего авто'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Проверить наличие дисков для моего авто',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal3':
        $subject = "\"Авто-Диски\" Сообщение с Лендинга - 'Подобрать диски'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        $message .= '<p>Диаметр диска: <b>'.$post_data['diameter'].'</b></p>';
        $message .= '<p>Предполагаемая цена: <b>'.$post_data['price'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Подобрать диски',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal4':
        $subject = "\"Авто-Диски\" Сообщение с Лендинга - 'Приобрести стильные диски в рассрочку'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Приобрести стильные диски в рассрочку',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal5':
        $subject = "\"Авто-Диски\" Сообщение с Лендинга - 'Форма заказа обратного звонка, виджет слева'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка, виджет слева',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
    case 'modal6':
        $subject = "\"Авто-Диски\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
    case 'online-selection_btn':
        $subject = "\"Авто-Диски\" Сообщение с Лендинга - 'Подобрать диски внизу страницы'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        $message .= '<p>Бренд авто: <b>'.$post_data['brand'].'</b></p>';
        $message .= '<p>Диаметр диска: <b>'.$post_data['diameter'].'</b></p>';
        $message .= '<p>Предполагаемая цена: <b>'.$post_data['price'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Подобрать диски внизу страницы',$post_data['phone'],$post_data['urlName']);
//        echo json_encode(['callback' => true]);
        break;
}
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <remont-akpp@sales-kolesa.site>' . "\r\n";

switch ($post_data['type']) {
    case 'callback-form-header':
        $subject = "\"ДИСКИ\" Сообщение с Лендинга - 'Форма заказа обратного звонка в хедере'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка в хедере',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'proverka-nalichiya-form':
        $subject = "\"ДИСКИ\" Сообщение с Лендинга - 'ПРОВЕРИТЬ НАЛИЧИЕ ДИСКОВ ДЛЯ МОЕГО АВТО'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br>';
        $message .= '<p>Бренд: <b>'.$post_data['brand'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПРОВЕРИТЬ НАЛИЧИЕ ДИСКОВ ДЛЯ МОЕГО АВТО',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'podbor-modal-form':
        $subject = "\"ДИСКИ\" Сообщение с Лендинга - 'ПОДОБРАТЬ ДИСКИ'";
        $message = '<p>Бренд: <b>'.$post_data['brand'].'</b></p><p>Диаметр: <b>'.$post_data['diameter'].'</b></p><p>Цена: <b>'.$post_data['price'].'</b></p><p>Номер телефона: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОДОБРАТЬ ДИСКИ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'priobresti-rassrochka-form':
        $subject = "\"ДИСКИ\" Сообщение с Лендинга - 'ПРИОБРЕСТИ СТИЛЬНЫЕ ДИСКИ В РАССРОЧКУ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПРИОБРЕСТИ СТИЛЬНЫЕ ДИСКИ В РАССРОЧКУ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'onlain-podbor-diskov-form':
        $subject = "\"ДИСКИ\" Сообщение с Лендинга - 'ПОСМОТРЕТЬ ЛУЧШИЕ ДИСКИ ДЛЯ МОЕГО АВТО'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОСМОТРЕТЬ ЛУЧШИЕ ДИСКИ ДЛЯ МОЕГО АВТО',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer':
        $subject = "\"ДИСКИ\" Сообщение с Лендинга - 'ПЕРЕЗВОНИТЕ МНЕ ФУТЕР'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПЕРЕЗВОНИТЕ МНЕ ФУТЕР',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-aside':
        $subject = "\"ДИСКИ\" Сообщение с Лендинга - 'ПОЛУЧИТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОЛУЧИТЬ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'fakeRoistat_modal':
        $subject = "\"ДИСКИ\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}

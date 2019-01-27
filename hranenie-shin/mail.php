<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <hranenie-shin@sales-kolesa.site>' . "\r\n";
var_dump($_POST);
switch ($post_data['type']) {
    case 'callback-top':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'get-tyres':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'ПРОВЕРИТЬ НАЛИЧИЕ МЕСТ НА СКЛАДЕ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПРОВЕРИТЬ НАЛИЧИЕ МЕСТ НА СКЛАДЕ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'get-tyres-mobile':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'ПРОВЕРИТЬ НАЛИЧИЕ МЕСТ НА СКЛАДЕ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПРОВЕРИТЬ НАЛИЧИЕ МЕСТ НА СКЛАДЕ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'left-widget-get-tyres':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'РАССЧИТАТЬ СТОИМОСТЬ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><p>Диаметр диска: <b>'.$post_data['diameter'].'</b></p><p>Хранение с: <b>'.$post_data['sdiskami'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('РАССЧИТАТЬ СТОИМОСТЬ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'second-get-tyres-form':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'СДАТЬ ШИНЫ В БЛИЖАЙШИЙ АВТОЦЕНТР'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('СДАТЬ ШИНЫ В БЛИЖАЙШИЙ АВТОЦЕНТР',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'second-get-tyres-form-mobile':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'СДАТЬ ШИНЫ В БЛИЖАЙШИЙ АВТОЦЕНТР'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('СДАТЬ ШИНЫ В БЛИЖАЙШИЙ АВТОЦЕНТР',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'bronirovanie':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'ЗАБРОНИРОВАТЬ МЕСТО НА СКЛАДЕ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАБРОНИРОВАТЬ МЕСТО НА СКЛАДЕ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'bronirovanie-mobile':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'ЗАБРОНИРОВАТЬ МЕСТО НА СКЛАДЕ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАБРОНИРОВАТЬ МЕСТО НА СКЛАДЕ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'hranenie-shin':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'ОСТАВИТЬ ЗАЯВКУ НА ХРАНЕНИЕ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ОСТАВИТЬ ЗАЯВКУ НА ХРАНЕНИЕ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'hranenie-shin-mobile':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'ОСТАВИТЬ ЗАЯВКУ НА ХРАНЕНИЕ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ОСТАВИТЬ ЗАЯВКУ НА ХРАНЕНИЕ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'store-amount':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'store-amount-mobile':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-bottom':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'Заказ обратного звонка из футера'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Заказ обратного звонка из футера',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-bottom-mobile':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'Заказ обратного звонка из футера'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Заказ обратного звонка из футера',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'order':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'Забронировать место на складе'";
        $message = '<p>Имя клиента: <b>'.$post_data['name'].'</b></p><p>Электронная почта клиента: <b>'.$post_data['email'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Забронировать место на складе',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zabronirovat_form':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'Забронировать место на складе'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Забронировать место на складе',$post_data['phone'],$post_data['urlName']);
        break;
    case 'zabronirovat_form-mobile':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'Забронировать место на складе'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Забронировать место на складе',$post_data['phone'],$post_data['urlName']);
        break;
    case 'fakeRoistat_modal':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}

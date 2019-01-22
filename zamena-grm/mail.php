<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <remont-akpp@sales-kolesa.site>' . "\r\n";

switch ($post_data['type']) {
    case 'callback-form-top':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'uzhat-stoimost-form':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Узнать стоимость замены для моего авто'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Бренд:</p><b>'.$post_data['brand'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Узнать стоимость замены для моего авто',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'uzhat-stoimost-form-mobile':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Узнать стоимость замены для моего авто'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Бренд:</p><b>'.$post_data['brand'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Узнать стоимость замены для моего авто',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zabronirovat-zapis':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Забронировать запись на ближайшее время'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Забронировать запись на ближайшее время',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zabronirovat-zapis-mobile':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Забронировать запись на ближайшее время'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Забронировать запись на ближайшее время',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-servis':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Записаться в ближайший автосервис'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться в ближайший автосервис',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-servis-mobile':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Записаться в ближайший автосервис'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться в ближайший автосервис',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-vremya':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Записаться в удобное время'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться в удобное время',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-vremya-mobile':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Записаться в удобное время'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться в удобное время',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'raschet-stoimosti':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Получить расчёт стоимости на телефон'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Бренд:</p> <b>'.$post_data['brand'].'</b></p><br><p>Год</p>: <b>'.$post_data['year'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Получить расчёт стоимости на телефон',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'raschet-stoimosti-mobile':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Получить расчёт стоимости на телефон'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Бренд:</p> <b>'.$post_data['brand'].'</b></p><br><p>Год</p>: <b>'.$post_data['year'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Получить расчёт стоимости на телефон',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Форма заказа обратного звонка - футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка - футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer-mobile':
        $subject = "\"ЗАМЕНА ГРМ\" Сообщение с Лендинга - 'Форма заказа обратного звонка - футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка - футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'fakeRoistat_modal':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}

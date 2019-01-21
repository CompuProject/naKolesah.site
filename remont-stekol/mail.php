<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <remont-akpp@sales-kolesa.site>' . "\r\n";

switch ($post_data['type']) {
    case 'callback-form-top':
        $subject = "\"РЕМОНТ_СТЕКОЛ\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-onlain-form':
        $subject = "\"РЕМОНТ_СТЕКОЛ\" Сообщение с Лендинга - 'БЫСТРАЯ ЗАПИСЬ ОНЛАЙН'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('БЫСТРАЯ ЗАПИСЬ ОНЛАЙН',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-onlain-form-mobile':
        $subject = "\"РЕМОНТ_СТЕКОЛ\" Сообщение с Лендинга - 'БЫСТРАЯ ЗАПИСЬ ОНЛАЙН'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('БЫСТРАЯ ЗАПИСЬ ОНЛАЙН',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'raschet-stoimosti-form':
        $subject = "\"РЕМОНТ_СТЕКОЛ\" Сообщение с Лендинга - 'РАССЧИТАТЬ ТОЧНУЮ СТОИМОСТЬ'";
        $message = '<p>Марка: <b>'.$post_data['brand'].'</b></p><p>Номер телефона: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('РАССЧИТАТЬ ТОЧНУЮ СТОИМОСТЬ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'raschet-stoimosti-form-mobile':
        $subject = "\"РЕМОНТ_СТЕКОЛ\" Сообщение с Лендинга - 'РАССЧИТАТЬ ТОЧНУЮ СТОИМОСТЬ'";
        $message = '<p>Марка: <b>'.$post_data['brand'].'</b></p><p>Номер телефона: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('РАССЧИТАТЬ ТОЧНУЮ СТОИМОСТЬ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer':
        $subject = "\"РЕМОНТ_СТЕКОЛ\" Сообщение с Лендинга - 'Форма заказа обратного звонка футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer-mobile':
        $subject = "\"РЕМОНТ_СТЕКОЛ\" Сообщение с Лендинга - 'Форма заказа обратного звонка футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'onlain-zapis-link-top':
        $subject = "\"РЕМОНТ_СТЕКОЛ\" Сообщение с Лендинга - 'Записаться в ближайший автосервис'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться в ближайший автосервис',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'fakeRoistat_modal':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}

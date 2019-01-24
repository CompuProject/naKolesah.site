<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <remont-masel@sales-kolesa.site>' . "\r\n";

switch ($post_data['type']) {
    case 'callback-form-top':
        $subject = "\"ЗАМЕНА МАСЛА\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-link-top':
        $subject = "\"ЗАМЕНА МАСЛА\" Сообщение с Лендинга - 'Записаться в ближайший автосервис'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться в ближайший автосервис',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'rasschitat-stoimost-form':
        $subject = "\"ЗАМЕНА МАСЛА\" Сообщение с Лендинга - 'Расчитать точную стоимость'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Бренд:</p><b>'.$post_data['brand'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Расчитать точную стоимость',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'rasschitat-stoimost-form-mobile':
        $subject = "\"ЗАМЕНА МАСЛА\" Сообщение с Лендинга - 'Расчитать точную стоимость'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Бренд:</p><b>'.$post_data['brand'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Расчитать точную стоимость',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'bistraya-zapis-online-form':
        $subject = "\"ЗАМЕНА МАСЛА\" Сообщение с Лендинга - 'Быстрая запись онлайн'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Быстрая запись онлайн',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'bistraya-zapis-online-form-mobile':
        $subject = "\"ЗАМЕНА МАСЛА\" Сообщение с Лендинга - 'Быстрая запись онлайн'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Быстрая запись онлайн',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer':
        $subject = "\"ЗАМЕНА МАСЛА\" Сообщение с Лендинга - 'Форма заказа обратного звонка-футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка-футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer-mobile':
        $subject = "\"ЗАМЕНА МАСЛА\" Сообщение с Лендинга - 'Форма заказа обратного звонка-футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка-футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'fakeRoistat_modal':
        $subject = "\"ЗАМЕНА МАСЛА\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}

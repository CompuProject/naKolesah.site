<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <remont-akpp@sales-kolesa.site>' . "\r\n";

switch ($post_data['type']) {
    case 'callback-form-top':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'podobrat-shini-online':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'ПОДОБРАТЬ ШИНЫ ОНЛАЙН'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Диаметр колеса</p>: <b>'.$post_data['diameter'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['sezon'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['price'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОДОБРАТЬ ШИНЫ ОНЛАЙН',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'podobrat-shini-online-mobile':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'ПОДОБРАТЬ ШИНЫ ОНЛАЙН'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Диаметр колеса</p>: <b>'.$post_data['diameter'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['sezon'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['price'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОДОБРАТЬ ШИНЫ ОНЛАЙН',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'podbor-shin-form':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Подобрать шины'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Подобрать шины',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'podbor-shin-form-mobile':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Подобрать шины'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Подобрать шины',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'posmotret-varianty-form':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Посмотреть варианты'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Бренд:</p><b>'.$post_data['brand'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Посмотреть варианты',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'posmotret-varianty-form-mobile':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Посмотреть варианты'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Бренд:</p><b>'.$post_data['brand'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Посмотреть варианты',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-shinomontazh-form':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Записаться на шиномонтаж'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться на шиномонтаж',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-shinomontazh-form-mobile':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Записаться на шиномонтаж'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Записаться на шиномонтаж',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'proverit-nalichie-mest':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Проверить наличие мест на складе'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Проверить наличие мест на складе',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'proverit-nalichie-mest-mobile':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Проверить наличие мест на складе'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Проверить наличие мест на складе',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'onlain-podbor-shin-form':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ МОЕГО АВТО'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Диаметр колеса</p>: <b>'.$post_data['diameter'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['sezon'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['price'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ МОЕГО АВТО',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'onlain-podbor-shin-form-mobile':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ МОЕГО АВТО'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Диаметр колеса</p>: <b>'.$post_data['diameter'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['sezon'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['price'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ МОЕГО АВТО',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'left_form_online_podbor':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ МОЕГО АВТО кнопка слева'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><br><p>Диаметр колеса</p>: <b>'.$post_data['diameter'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['sezon'].'</b></p><br><p>Сезон</p>: <b>'.$post_data['price'].'</b></p><br>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ МОЕГО АВТО кнопка слева',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Форма заказа обратного звонка футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer-mobile':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Форма заказа обратного звонка футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'fakeRoistat_modal':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}

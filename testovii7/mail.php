<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <hranenie-shin@sales-kolesa.site>' . "\r\n";

switch ($post_data['type']) {
    case 'callback-top-form':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-montazh':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-montazh-mobile':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-blizhaishii':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-blizhaishii-mobile':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'podbor-shin':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ПОДОБРАТЬ ШИНЫ/ДИСКИ ПО АВТО'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><p>Бренд: <b>'.$post_data['brand'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОДОБРАТЬ ШИНЫ/ДИСКИ ПО АВТО',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'podbor-shin-mobile':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ПОДОБРАТЬ ШИНЫ/ДИСКИ ПО АВТО'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p><p>Бренд: <b>'.$post_data['brand'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОДОБРАТЬ ШИНЫ/ДИСКИ ПО АВТО',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'shini-hranenie':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ОСТАВИТЬ ШИНЫ НА ХРАНЕНИЕ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ОСТАВИТЬ ШИНЫ НА ХРАНЕНИЕ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'shini-hranenie-mobile':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ОСТАВИТЬ ШИНЫ НА ХРАНЕНИЕ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ОСТАВИТЬ ШИНЫ НА ХРАНЕНИЕ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-montazh-bottom':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-montazh-bottom-mobile':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'Форма заказа обратного звонка - футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка - футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer-mobile':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'Форма заказа обратного звонка - футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка - футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'aside-form':
        $subject = "\"Шиномонтаж\" Сообщение с Лендинга - 'Кнопка слева'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Кнопка слева',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'fakeRoistat_modal':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}

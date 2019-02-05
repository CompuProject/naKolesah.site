<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <hranenie-shin@sales-kolesa.site>' . "\r\n";

switch ($post_data['type']) {
    case 'callback-top-form':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-diagnostika':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-diagnostika-mobile':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-blizhaishii':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ В БЛИЖАЙШИЙ К ДОМУ АВТОСЕРВИС'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ В БЛИЖАЙШИЙ К ДОМУ АВТОСЕРВИС',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis-blizhaishii-mobile':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ В БЛИЖАЙШИЙ К ДОМУ АВТОСЕРВИС'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ В БЛИЖАЙШИЙ К ДОМУ АВТОСЕРВИС',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis_udobnoe_vremya':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis_udobnoe_vremya-mobile':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'feedback_form':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Оставить отзыв'";
        $message = '<p>Оценка: <b>'.$post_data['stars'].'</b></p><br>';
        $message .= '<p>Достоинства: <b>'.$post_data['merits'].'</b></p><br>';
        $message .= '<p>Недостатки: <b>'.$post_data['limitations'].'</b></p><br>';
        $message .= '<p>Имя: <b>'.$post_data['name'].'</b></p><br>';
        $message .= '<p>Авто: <b>'.$post_data['auto'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Оставить отзыв',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'feedback_form-mobile':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Оставить отзыв'";
        $message = '<p>Оценка: <b>'.$post_data['stars'].'</b></p><br>';
        $message .= '<p>Достоинства: <b>'.$post_data['merits'].'</b></p><br>';
        $message .= '<p>Недостатки: <b>'.$post_data['limitations'].'</b></p><br>';
        $message .= '<p>Имя: <b>'.$post_data['name'].'</b></p><br>';
        $message .= '<p>Авто: <b>'.$post_data['auto'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Оставить отзыв',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis_diagnostika_bottom':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'zapis_diagnostika_bottom-mobile':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ В УДОБНОЕ ВРЕМЯ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Форма заказа обратного звонка - футер'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка - футер',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'callback-form-footer-mobile':
        $subject = "\"Диагностика\" Сообщение с Лендинга - 'Форма заказа обратного звонка - футер'";
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

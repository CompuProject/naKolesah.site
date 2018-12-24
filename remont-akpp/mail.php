<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/form_function_init.php";
$post_data = $_POST;
$to = 'sales-kolesa@yandex.ru, order@salesgenerator.pro';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html\r\n";
$headers .= 'From: <remont-akpp@sales-kolesa.site>' . "\r\n";

switch ($post_data['type']) {
    case 'callback-top':
        $subject = "\"РЕМОНТ_АКПП\" Сообщение с Лендинга - 'Форма заказа обратного звонка'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Форма заказа обратного звонка',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'get-tyres':
        $subject = "\"РЕМОНТ_АКПП\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ АКПП'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ АКПП',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'left-widget-get-tyres':
        $subject = "\"РЕМОНТ_АКПП\" Сообщение с Лендинга - 'УЗНАТЬ ПРЕДВАРИТЕЛЬНУЮ СТОИМОСТЬ МОЕГО РЕМОНТА'";
        $message = '<p>Тип акпп: <b>'.$post_data['type_akpp'].'</b></p><p>Марка: <b>'.$post_data['marks_auto'].'</b></p><p>Номер телефона: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('УЗНАТЬ ПРЕДВАРИТЕЛЬНУЮ СТОИМОСТЬ МОЕГО РЕМОНТА',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'second-get-tyres-form':
        $subject = "\"РЕМОНТ_АКПП\" Сообщение с Лендинга - 'ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'bronirovanie':
        $subject = "\"РЕМОНТ_АКПП\" Сообщение с Лендинга - 'ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ АКПП'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ АКПП',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'tire-fitting':
        $subject = "\"ХРАНЕНИЕ_ШИН\" Сообщение с Лендинга - 'ПЕРЕЗВОНИТЕ МНЕ'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('ПЕРЕЗВОНИТЕ МНЕ',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'cost':
        $subject = "\"РЕМОНТ_АКПП\" Сообщение с Лендинга - 'УЗНАТЬ ПРЕДВАРИТЕЛЬНУЮ СТОИМОСТЬ'";
        $message = '<p>Тип акпп: <b>'.$post_data['type-akpp'].'</b></p><p>Марка: <b>'.$post_data['mark'].'</b></p><p>Тип АКПП: <b>'.$post_data['type_akpp'].'</b></p><p>Номер телефона: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('УЗНАТЬ ПРЕДВАРИТЕЛЬНУЮ СТОИМОСТЬ МОЕГО РЕМОНТА',$post_data['phone'],$post_data['urlName']);
        echo json_encode(['callback' => true]);
        break;
    case 'modal7':
        $subject = "\"ШИНЫ\" Сообщение с Лендинга - 'Lovec'";
        $message = '<p>Номер телефона клиента: <b>'.$post_data['phone'].'</b></p>';
        mail($to, $subject, $message, $headers);
        addFormDataToTheDatabase('Lovec',$post_data['phone'],$post_data['urlName']);
        break;
}

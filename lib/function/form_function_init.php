<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/lib/function/mysql_init.php";

function addFormDataToTheDatabase($formName = "", $formData = "", $siteName = "") {
    $mysqliHelper = new MysqliHelper();
    return $mysqliHelper->insert("INSERT INTO `forms_data` (`siteName`,`form-name`, `mesage`) VALUES ('".$mysqliHelper->escapeString($siteName)."', '".$mysqliHelper->escapeString($formName)."', '".$mysqliHelper->escapeString($formData)."');");
}
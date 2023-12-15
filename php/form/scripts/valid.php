<?php
$email = $_POST["email"];
if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false)
{
    //echo "Адрес указан корректно.";
}else{
    //echo "Адрес указан не правильно.";
}


?>
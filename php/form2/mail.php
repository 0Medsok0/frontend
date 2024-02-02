<?php

require 'save_file.php';

function validateEmail($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $day = $_POST["day"];
  $month = $_POST["month"];
  $year = $_POST["year"];
  $email = $_POST["email"];
  //$file_path = $_POST["image"]; //image

  if (empty($firstname) || empty($lastname) || empty($day) || empty($month) || empty($year) || empty($email) ) { // || empty($file_path)
    echo "Please fill in all the fields";
  } else {
    $to = "smykov.iw@yandex.ru"; // емайл получателя данных из формы

    $tema = "Форма  PHP"; // тема полученного емайла

    $message = "Firstname: " . $_POST['firstname'] . "\n";
    $message .= "Lastname: " . $_POST['lastname'] . "\n";
    $message .= "M--D--Y: " . $_POST['dob'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    // $message .= "Photo: " . $_POST['image'] . "\n"; // !!


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    if (mail($to, $tema, $message, $headers)) {
        echo "Ваше письмо было успешно отправлено!";
    } else {
        echo "При отправке сообщения произошли неполадки";
    }
}
}

?>


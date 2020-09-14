<?php
$to  = "<al.losev.k@gmail.com>";

$subject = "Заявка с сайта";
$name = $_POST['name'];
$phone = $_POST['phone'];
$question = $_POST['question'];

if(empty($subject) or empty($phone)) {
    exit ("<p class='bg-warning text-danger'>Ошибка! Заполните все поля.</p>");
}

$message = '
<html>
    <head>
        <title style="color: #">Заявка с сайта</title>
    </head>
    <body>
        <p>Имя: '.$name.'</p>
        <p>Телефон: '.$phone.'</p>
        <p>Вопрос: '.$question.'</p>
    </body>
</html>';

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: <treprint@admin.ru>\r\n";
$headers .= "Bcc: treprint@admin.ru\r\n";

$mail = mail($to, $subject, $message, $headers);
if($mail) {
    exit ("<p class='bg-success text-success'>Ваша заявка принята!</p>");
}
else {
    exit ("<p class='bg-warning text-danger'>Ошибка! Обновите страницу и попробуйте еще раз.</p>");
}
?>

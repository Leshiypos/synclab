<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );
// Получаем значения переменных из пришедших данных
$name = $_POST['username'];
$email = $_POST['useremail'];
$header = $_POST['userheadr'];
$message = $_POST['usermessage'];
$headerinmail = "Заявка с сайта SyncLab по теме $header";
$email_in = 'Leshiy_POS@mail.ru';
// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
$mes = "Имя: $name \nE-mail: $email \nТема: $header \nТекст: $message";
// Пытаемся отправить письмо по заданному адресу
// Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
$send = mail($email_in, $headerinmail, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
// Если отправка прошла успешно — так и пишем
if ($send == 'true') {echo "Сообщение отправлено";}
// Если письмо не ушло — выводим сообщение об ошибке
else {echo "Ой, что-то пошло не так";}
?>
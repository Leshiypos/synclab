<?php
include('../functions.php');
// Получаем значения переменных из пришедших данных
$name = $_POST['username'];
$email = "Не указано";
$lastname=$_POST['userlastname'];
$tel= $_POST['usertel'];
$company=$_POST['usercompany'];
$activity=$_POST['useractivity'];
$country= $_POST['usercountry'];
$sity=$_POST['usersity'];
$headerinmail = "Заявка на получение доступа к библиотеке с сайта SyncLab";
// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
$mes = "$headerinmail \nИмя: $name \nФамилия: $lastname \nТелефон: $tel \nКомпания : $company \nДеятельность : $activity \nСтрана : $country \nГород : $sity";
// Пытаемся отправить письмо по заданному адресу
// Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
$send = mail($email_in, $headerinmail, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
// Если отправка прошла успешно — так и пишем
if ($send == 'true') {echo "Сообщение отправлено";}
// Если письмо не ушло — выводим сообщение об ошибке
else {echo "Ой, что-то пошло не так";}
?>
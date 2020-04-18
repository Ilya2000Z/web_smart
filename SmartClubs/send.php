<?php
$fio = $_POST['fio'];
$spisok = $_POST['spisok'];
$telefon = $_POST['telefon'];
$fio = htmlspecialchars($fio);
$spisok = htmlspecialchars($spisok);
$telefon = htmlspecialchars($telefon);
$fio = urldecode($fio);
$spisok = urldecode($spisok);
$telefon = urldecode($telefon);
$fio = trim($fio);
$spisok = trim($spisok);
$telefon = trim($telefon);
(mail("zie2000@mail.ru", "Заявка с сайта", "ФИО:".$fio.". телефон: ".$telefon. ".секция: ".$spisok."From: zie2000@mail.ru \r\n"))


?>

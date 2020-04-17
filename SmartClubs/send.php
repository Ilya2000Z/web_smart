<?php
$fio = $_POST['fio'];
$telefon = $_POST['telefon'];
$fio = htmlspecialchars($fio);
$telefon = htmlspecialchars($telefon);
$fio = urldecode($fio);
$telefon = urldecode($telefon);
$fio = trim($fio);
$telefon = trim($telefon);
 (mail("zie2000@mail.ru", "Заявка с сайта", "ФИО:".$fio.". telefon: ".$telefon."From: zie2000@mail.ru \r\n"))
?>
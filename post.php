<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$id = NULL;
if(!$id) $id = $_POST['id'];

$name=  $_POST['name'];

$brand = $_POST['brand'];

$due = $_POST['due'];

$area = $_POST['area'];

$price = $_POST['price'];

$amount = $_POST['amount'];
echo $id;
$sql = "insert into `pro`.`food` (`id`,`fname`, `fbrand`, `duedate`, `area`, `fprice`, `famount`) values ('$id','$name','$brand','$due','$area','$price','$amount')";

mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>
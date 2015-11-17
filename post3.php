<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$date = $_POST['date'];

$id = $_POST['id'];

$amount = $_POST['amount'];

$unit = $_POST['unit'];

$total = $_POST['total'];

$sql = "insert into `pro`.`stock` (`date`, `id`, `amount`, `unit`, `total`) values ('$date','$id','$amount','$unit','$total')";

mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>
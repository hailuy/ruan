<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$stime=  $_POST['stime'];

$id = $_POST['id'];

$samount = $_POST['samount'];

$sunit = $_POST['sunit'];

$stotal = $_POST['stotal'];

echo $id;
$sql = "insert into `pro`.`sale` (`stime`,`id`,`samount`,`sunit`,`stotal`) values ('$stime','$id','$samount','$sunit','$stotal')";

mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>
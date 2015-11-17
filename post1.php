<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$cid = $_POST['cid'];

$cname=  $_POST['cname'];

$cbrand = $_POST['cbrand'];

$color = $_POST['color'];

$size = $_POST['size'];

$customer = $_POST['customer'];

$price = $_POST['price'];

$amount = $_POST['amount'];
echo $cid,$cname,$cbrand,$color,$size,$customer,$price;
$sql = "INSERT INTO `pro`.`clothes` (`cid`, `cname`, `cbrand`, `color`, `size`, `customer`, `price`, `amount`) VALUES ('$cid','$cname','$cbrand','$color','$size','$customer',$price','$amount')";
mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>
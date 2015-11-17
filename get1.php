<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$sq = '`food`.';

if($_GET['id'].$_GET['name'].$_GET['brand'].$_GET['due'].$_GET['area'].$_GET['price'].$_GET['amount'] == '')
	$sq = '';
else{
	if(!$_GET['id']);
	else{
		$id = $_GET['id'];
		if($sq !='`food`.')
			$sq = $sq."and";
		$sq = $sq."`id` = '$id'";
	}

	if(!$_GET['name']);
	else{
		$name = $_GET['name'];
		if($sq !='`food`.')
			$sq = $sq."and";
		$sq = $sq." `fname` like '$name'";
	}

	if(!$_GET['brand']);
	else{
		$brand = $_GET['brand'];
		if($sq !='`food`.')
			$sq = $sq."and";
		$sq = $sq." `fbrand` = '$brand' ";
	}

	if(!$_GET['due']);
	else{
		if($sq !='`food`.')
			$sq = $sq."and";
		$sq = $sq." `duedate` = '$due' ";
	}

	if(!$_GET['area']);
	else{
		if($sq !='`food`.')
			$sq = $sq."and";
		$sq = $sq." `area` = '$area'";
	}

	if(!$_GET['price']);
	else{
		if($sq !='`food`.')
			$sq = $sq."and";
		$sq = $sq." `fprice` = '$price'";
	}

	if(!$_GET['amount']);
	else{
		if($sq !='`food`.')
			$sq = $sq."and";
		$sq = $sq." `famount` = '$amount'";
	}
}

echo $sq;
$sql = "DELETE FROM `pro`.`food` where $sq";

$index = mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>
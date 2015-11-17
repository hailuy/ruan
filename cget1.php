<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$sq = '`clothes`.';

if($_GET['cid'].$_GET['cname'].$_GET['cbrand'].$_GET['color'].$_GET['size'].$_GET['customer'].$_GET['price'].$_GET['amount'] == '')
	$sq = '';
else{
	if(!$_GET['cid']);
	else{
		$cid = $_GET['cid'];
		if($sq !='`clothes`.')
			$sq = $sq."and";
		$sq = $sq."`cid` = '$cid'";
	}

	if(!$_GET['cname']);
	else{
		$cname = $_GET['cname'];
		if($sq !='`clothes`.')
			$sq = $sq."and";
		$sq = $sq." `cname` like '$cname'";
	}

	if(!$_GET['cbrand']);
	else{
		$cbrand = $_GET['cbrand'];
		if($sq !='`clothes`.')
			$sq = $sq."and";
		$sq = $sq." `cbrand` = '$cbrand' ";
	}

	if(!$_GET['color']);
	else{
		if($sq !='`clothes`.')
			$sq = $sq."and";
		$sq = $sq." `color` = '$color' ";
	}

	if(!$_GET['size']);
	else{
		if($sq !='`clothes`.')
			$sq = $sq."and";
		$sq = $sq." `size` = '$size'";
	}

	if(!$_GET['customer']);
	else{
		if($sq !='`clothes`.')
			$sq = $sq."and";
		$sq = $sq." `customer` = '$customer'";
	}
	
	
	if(!$_GET['price']);
	else{
		if($sq !='`clothes`.')
			$sq = $sq."and";
		$sq = $sq." `price` = '$price'";
	}

	if(!$_GET['amount']);
	else{
		if($sq !='`clothes`.')
			$sq = $sq."and";
		$sq = $sq." `amount` = '$amount'";
	}
}

echo $sq;
$sql = "DELETE FROM `pro`.`clothes` where $sq";

$index = mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>
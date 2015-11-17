<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$sq = '`sale`.';

if($_GET['id'].$_GET['stime'].$_GET['sunit'].$_GET['stotal'].$_GET['samount'] == '')
	$sq = '';
else{
	if(!$_GET['id']);
	else{
		$id = $_GET['id'];
		if($sq !='`sale`.')
			$sq = $sq."and";
		$sq = $sq."`id` = '$id'";
	}

	if(!$_GET['stime']);
	else{
		$stime = $_GET['stime'];
		if($sq !='`sale`.')
			$sq = $sq."and";
		$sq = $sq." `stime` like '$stime'";
	}

	if(!$_GET['sunit']);
	else{
		$sunit = $_GET['sunit'];
		if($sq !='`sale`.')
			$sq = $sq."and";
		$sq = $sq." `sunit` = '$sunit' ";
	}

	if(!$_GET['stotal']);
	else{
		if($sq !='`sale`.')
			$sq = $sq."and";
		$sq = $sq." `stotal` = '$stotal'";
	}

	if(!$_GET['samount']);
	else{
		if($sq !='`sale`.')
			$sq = $sq."and";
		$sq = $sq." `samount` = '$samount'";
	}
}

echo $sq;
$sql = "DELETE FROM `pro`.`sale` where $sq";

$index = mysql_query($sql);

echo "<script>location.href='index.php';</script>";
?>
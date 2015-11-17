<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

$sq = '';

echo "$sq";

if(!$_GET['id']);
else{
	$id = $_GET['id'];
	$sq = $sq."`p`.`id` = `p`.`id` + '$id'";
}
	
if(!$_GET['name']);
else{
	$name = $_GET['name'];
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`fname` = `p`.`fname` + '$name'";
}
	
if(!$_GET['brand']);
else{
	$brand = $_GET['brand'];
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`fbrand` = `p`.`fbrand` + '$brand' ";
}

if(!$_GET['due']);
else{
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`duedate` = `p`.`duedate` +กก'$due' ";
}

if(!$_GET['area']);
else{
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`area` = `p`.`area` + '$area'";	
}

if(!$_GET['price']);
else{ 
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`fprice` = `p`.`fprice` + '$price'";
}

if(!$_GET['amount']);
else{
	if($sq)
		$sq = $sq."and";
	$sq = $sq."`p`.`famount` = `p`.`famount` + '$amount'";
}
$sql = "update `pro`.`food` `p` set $sq";

$index = mysql_query($sql);

echo "$sq";

?>
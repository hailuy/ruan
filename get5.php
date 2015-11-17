<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['time'].$_GET['id'].$_GET['amount'].$_GET['unit'].$_GET['total'] == '')
	$sq = '';
else{
	$sq = 'and `sale`.';
	if(!$_GET['time']);
	else{
		$name = $_GET['time'];
		if($sq != 'and `sale`.')
			$sq = $sq."and";
		$sq = $sq."`stime` = '$time'";
	}
	
	if(!$_GET['id']);
	else{
		if($sq != 'and `sale`.')
			$sq = $sq."and";
		$id = $_GET['id'];
		$sq = $sq."`id` = '$id'";
	}
	
	if(!$_GET['amount']);
	else{
		if($sq != 'and `sale`.')
			$sq = $sq."and";
		$sq = $sq."`samount` = '$amount'";
	}
	
	if(!$_GET['unit']);
	else{
		$brand = $_GET['unit'];
		if($sq != 'and `sale`.')
			$sq = $sq."and";
		$sq = $sq."`sunit` = '$unit' ";
	}
	
	if(!$_GET['total']);
	else{
		$brand = $_GET['total'];
		if($sq != 'and `sale`.')
			$sq = $sq."and";
		$sq = $sq."`stotal` = '$total' ";
	}
	
}

$sql = "select * from `pro`.`sale` where 1 = 1 $sq";
echo $sql;
$index = mysql_query($sql);

?>


<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>sale</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">sale</a> | <a href="insert2.php">insert</a> | <a href="delete2.php">delete</a> | <a href="update2.php">update</a> | <a href="select2.php">select</a></td>

</tr>

</table>

<table width="500" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="100">stime</td>

<td width="100">id</td>

<td width="100">samount</td>

<td width="100">sunit</td>

<td width="100">stotal</td>

</tr>

<?php

while($row=mysql_fetch_array($result))

{
?>

<tr>

<td width="100"><?php echo $row[0] ?></td>

<td width="100"><?php echo $row[1] ?></td>

<td width="100"><?php echo $row[2] ?></td>

<td width="100"><?php echo $row[3] ?></td>

<td width="100"><?php echo $row[4] ?></td>

</tr>

<?php

}

mysql_close($q);

?>

</table>

</body>

</html>
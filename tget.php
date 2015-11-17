<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['id'].$_GET['date'].$_GET['unit'].$_GET['total'].$_GET['amount'] == '')
	$sq = '';
else{
	$sq = 'and `stock`.';
	if(!$_GET['id']);
	else{
		$id = $_GET['id'];
		if($sq !='and `stock`.')
			$sq = $sq."and";
		$sq = $sq."`id` = '$id'";
	}

	if(!$_GET['date']);
	else{
		$date = $_GET['date'];
		if($sq !='and `stock`.')
			$sq = $sq."and";
		$sq = $sq." `date` like '$date'";
	}

	if(!$_GET['unit']);
	else{
		$unit = $_GET['unit'];
		if($sq !='and `stock`.')
			$sq = $sq."and";
		$sq = $sq." `unit` = '$unit' ";
	}

	if(!$_GET['total']);
	else{
		$total = $_GET['total'];
		if($sq !='and `stock`.')
			$sq = $sq."and";
		$sq = $sq." `total` = '$total' ";
	}

	if(!$_GET['amount']);
	else{
		$amount = $_GET['amount'];
		if($sq !='and `stock`.')
			$sq = $sq."and";
		$sq = $sq." `amount` = '$amount'";
	}
}

$sql = "select * from `pro`.`stock` where 1 = 1 $sq";
echo $sql;
$index = mysql_query($sql);

?>


<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>stock</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">stock</a> | <a href="insert2.php">insert</a> | <a href="delete2.php">delete</a> | <a href="update2.php">update</a> | <a href="select2.php">select</a></td>

</tr>

</table>

<table width="500" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="100">date</td>

<td width="100">id</td>

<td width="100">amount</td>

<td width="100">unit</td>

<td width="100">total</td>


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
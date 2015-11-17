<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['id'].$_GET['name'].$_GET['brand'].$_GET['due'].$_GET['area'].$_GET['price'].$_GET['amount'] == '')
	$sq = '';
else{
	$sq = 'and `food`.';
	if(!$_GET['id']);
	else{
		$id = $_GET['id'];
		if($sq !='and `food`.')
			$sq = $sq."and";
		$sq = $sq."`id` = '$id'";
	}
	
	if(!$_GET['name']);
	else{
		$name = $_GET['name'];
		if($sq !='and `food`.')
			$sq = $sq."and";
		$sq = $sq." `fname` like '$name'";
	}
	
	if(!$_GET['brand']);
	else{
		$brand = $_GET['brand'];
		if($sq !='and `food`.')
			$sq = $sq."and";
		$sq = $sq." `fbrand` = '$brand' ";
	}
	
	if(!$_GET['due']);
	else{
		$due = $_GET['due'];
		if($sq !='and `food`.')
			$sq = $sq."and";
		$sq = $sq." `duedate` = '$due' ";
	}
	
	if(!$_GET['area']);
	else{
		$area = $_GET['area'];
		if($sq !='and `food`.')
			$sq = $sq."and";
		$sq = $sq." `area` = '$area'";
	}
	
	if(!$_GET['price']);
	else{
		$price = $_GET['price'];
		if($sq !='and `food`.')
			$sq = $sq."and";
		$sq = $sq." `fprice` = '$price'";
	}
	
	if(!$_GET['amount']);
	else{
		$amount = $_GET['amount'];
		if($sq !='and `food`.')
			$sq = $sq."and";
		$sq = $sq." `famount` = '$amount'";
	}
}

echo $sq;
$sql = "select * from `pro`.`food` where 1 = 1 $sq";
echo $sql;
$index = mysql_query($sql);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>system</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">main page</a> | <a href="insert.php">insert</a> | <a href="delete.php">delete</a> | <a href="update.php">update</a> | <a href="select.php">select</a></td>

</tr>

</table>

<table width="700" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="100">id</td>

<td width="100">fname</td>

<td width="100">fbrand</td>

<td width="100">duedate</td>

<td width="100">area</td>

<td width="100">fprice</td>

<td width="100">famount</td>

</tr>

<?php

while($row=mysql_fetch_array($index))

{
?>

<tr>

<td width="100"><?php echo $row[0] ?></td>

<td width="100"><?php echo $row[1] ?></td>

<td width="100"><?php echo $row[2] ?></td>

<td width="100"><?php echo $row[3] ?></td>

<td width="100"><?php echo $row[4] ?></td>

<td width="100"><?php echo $row[5] ?></td>

<td width="100"><?php echo $row[6] ?></td>

</tr>

<?php

}

mysql_close($q);

?>

</table>

</body>

</html>
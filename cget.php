<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['id'].$_GET['id'].$_GET['brand'].$_GET['color'].$_GET['size'].$_GET['customer'].$_GET['price'].$_GET['amount'] == '')
	$sq = '';
else{
	$sq = 'and `clothes`.';
	if(!$_GET['id']);
	else{
		$id = $_GET['id'];
		if($sq !='and `clothes`.')
			$sq = $sq."and";
		$sq = $sq."`cid` = '$id'";
	}
	
	if(!$_GET['name']);
	else{
		$name = $_GET['name'];
		if($sq !='and `clothes`.')
			$sq = $sq."and";
		$sq = $sq." `cname` like '$name'";
	}
	
	if(!$_GET['brand']);
	else{
		$brand = $_GET['brand'];
		if($sq !='and `clothes`.')
			$sq = $sq."and";
		$sq = $sq." `cbrand` = '$brand' ";
	}
	
	if(!$_GET['color']);
	else{
		$name = $_GET['color'];
		if($sq !='and `clothes`.')
			$sq = $sq."and";
		$sq = $sq." `color` like '$color'";
	}
	
	if(!$_GET['size']);
	else{
		if($sq !='and `clothes`.')
			$sq = $sq."and";
		$sq = $sq." `size` = '$size' ";
	}
	
	if(!$_GET['customer']);
	else{
		if($sq !='and `clothes`.')
			$sq = $sq."and";
		$sq = $sq." `customer` = '$customer'";
	}
	
	if(!$_GET['price']);
	else{
		if($sq !='and `clothes`.')
			$sq = $sq."and";
		$sq = $sq." `price` = '$price'";
	}
	
	if(!$_GET['amount']);
	else{
		if($sq !='and `clothes`.')
			$sq = $sq."and";
		$sq = $sq." `amount` = '$amount'";
	}
}

echo $sq;
$sql = "select * from `pro`.`clothes` where 1 = 1 $sq";
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

<td width="100">cname</td>

<td width="100">cbrand</td>

<td width="100">color</td>

<td width="100">size</td>

<td width="100">customer</td>

<td width="100">cprice</td>

<td width="100">camount</td>

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

<td width="100"><?php echo $row[7] ?></td>

</tr>

<?php

}

mysql_close($q);

?>

</table>

</body>

</html>
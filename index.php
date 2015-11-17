<?php

include("config.php");

$sql = "select * from food"; //搜索数据表food

$result = mysql_query($sql,$q);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>food</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">food</a> | <a href="insert.php">insert</a> | <a href="delete.php">delete</a> | <a href="update.php">update</a> | <a href="select.php">select</a></td>

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

while($row=mysql_fetch_array($result))

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



<?php

include("config.php");

$sql = "select * from clothes"; //搜索数据表food

$result = mysql_query($sql,$q);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>clothes</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">clothes</a> | <a href="insert1.php">insert</a> | <a href="delete1.php">delete</a> | <a href="update1.php">update</a> | <a href="select1.php">select</a></td>

</tr>

</table>

<table width="800" border="1" align="center" cellpadding="1" cellspacing="1">

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

while($row=mysql_fetch_array($result))

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



<?php

include("config.php");

$sql = "select * from sale"; //搜索数据表food

$result = mysql_query($sql,$q);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>sale</h1></td>

</tr>

<tr>

<td width="800"><a href="index.php">sale</a> | <a href="insert2.php">insert</a> | <a href="delete2.php">delete</a> | <a href="update2.php">update</a> | <a href="select2.php">select</a>  | <a href="select4.php">select time</a> | <a href="select5.php">statistics</a></td>

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




<?php

include("config.php");

$sql = "select * from stock"; //搜索数据表food

$result = mysql_query($sql,$q);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>stock</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">stock</a> | <a href="insert3.php">insert</a> | <a href="delete3.php">delete</a> | <a href="update3.php">update</a> | <a href="select3.php">select</a></td>

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

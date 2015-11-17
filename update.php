<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from food"; //搜索数据表content

$result = mysql_query($sql,$q);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>update</h1></td>

</tr>

<tr>

<td width="700"><a href="index.php">main page</a> | <a href="insert.php">insert</a> | <a href="delete.php">delete</a> | <a href="update.php">update</a> | <a href="select.php">select</a></td>

</tr>

</table>
<table align="center" width="678">

<tr>

<td>

<form name="form4" method="get" action="get2.php">

<p>id<input name="id" type="text" id="id"></p>

<p>food name<input name="name" type="text" id="name"></p>

<p>food brand<input name="brand" type="text" id="brand"></p>

<p>due day<input name="due" type="text" id="due"></p>

<p>area<input name="area" type="text" id="area"></p>

<p>food price<input name="price" type="text" id="price"></p>

<p>food amount<input name="amount" type="text" id="amount"></p>

<p>

<input type="submit" name="button" id="button" value="update">

<input type="reset" name="button2" id="button2" value="reset">

</p>

</form>

</td>

</tr>

</table>

</body>

</html>


<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from clothes"; //搜索数据表content

$result = mysql_query($sql,$q);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>select</h1></td>

</tr>

<tr>

<td width="700"><a href="index.php">main page</a> | <a href="insert1.php">insert</a> | <a href="delete1.php">delete</a> | <a href="update1.php">update</a> | <a href="select1.php">select</a></td>

</tr>

</table>
<table align="center" width="678">

<tr>

<td>

<form name="form8" method="get" action="cget.php">

<p>clothes id<input name="id" type="text" id="id"></p>

<p>clothes name<input name="name" type="text" id="name"></p>

<p>clothes brand<input name="brand" type="text" id="brand"></p>

<p>color<input name="color" type="text" id="color"></p>

<p>size<input name="size" type="text" id="size"></p>

<p>customer<input name="customer" type="text" id="customer"></p>

<p>price<input name="price" type="text" id="price"></p>

<p>amount<input name="amount" type="text" id="amount"></p>

<p>

<input type="submit" name="button" id="button" value="select">

<input type="reset" name="button2" id="button2" value="reset">

</p>

</form>

</td>

</tr>

</table>

</body>

</html>


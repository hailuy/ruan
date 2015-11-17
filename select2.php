<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from sale"; //搜索数据表content

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

<td width="700"><a href="index.php">main page</a> | <a href="insert2.php">insert</a> | <a href="delete2.php">delete</a> | <a href="update2.php">update</a> | <a href="select2.php">select</a></td>

</tr>

</table>
<table align="center" width="678">

<tr>

<td>

<form name="form9" method="get" action="sget.php">

<p>sale time<input name="time" type="text" id="time"></p>

<p>id<input name="id" type="text" id="id"></p>

<p>sale amount<input name="amount" type="text" id="amount"></p>

<p>sale unit<input name="unit" type="text" id="unit"></p>

<p>sale total<input name="total" type="text" id="total"></p>

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


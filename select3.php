<?php

include("config.php"); //�������ݿ������ļ�

$sql = "select * from stock"; //�������ݱ�content

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

<td width="700"><a href="index.php">main page</a> | <a href="insert3.php">insert</a> | <a href="delete3.php">delete</a> | <a href="update3.php">update</a> | <a href="select3.php">select</a></td>

</tr>

</table>
<table align="center" width="678">

<tr>

<td>

<form name="form10" method="get" action="tget.php">

<p>date<input name="date" type="text" id="date"></p>

<p>id<input name="id" type="text" id="id"></p>

<p>amount<input name="amount" type="text" id="amount"></p>

<p>unit<input name="unit" type="text" id="unit"></p>

<p>total<input name="total" type="text" id="total"></p>

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


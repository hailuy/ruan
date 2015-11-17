<?php
$q = mysql_connect('127.0.0.1:8080','root','');

if(!$q)

{

die('Could not connect: ' . mysql_error());

}

mysql_query("set names utf8"); //以utf8读取数据

mysql_select_db("ruan",$q); //数据库

?>
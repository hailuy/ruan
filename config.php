<?php
$q = mysql_connect('127.0.0.1:8080','root','');

if(!$q)

{

die('Could not connect: ' . mysql_error());

}

mysql_query("set names utf8"); //��utf8��ȡ����

mysql_select_db("ruan",$q); //���ݿ�

?>
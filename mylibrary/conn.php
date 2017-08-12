<?php
	@mysql_connect("localhost","root","")or	die('_mysql连接失败');
	@mysql_select_db("library")or	die('db连接失败');
	mysql_query('set names utf8');
?>
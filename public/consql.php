<?php
	@mysql_connect("localhost","root","000")or	die('_mysql连接失败');
	@mysql_select_db("mylibrary")or	die('db连接失败');
?>
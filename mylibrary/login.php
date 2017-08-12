<!DOCTYPE html>
<?php
	@mysql_connect("localhost","root","")or	die('_mysql连接失败');
	@mysql_select_db("mylibrary")or	die('db连接失败');//连接数据库	
?>
<html>
<head>
<title>图馆查询登录界面
</title>
<style type="text/css">
</style>
    
</head>
<body background='http://localhost/ctc/mylibrary/background.jpg'>
<br/><br/><br/><br/><br/><br/><br/>
<div	style="text-align:center;">
<h1	style="font-family:宋体;color=grey;"><big>图书查询登录界面</big></h1>
</div>
<br/><br/><br/><br/><br/>
<div	style="text-align:center;">
<form	name="input" action="http://localhost/ctc/mylibrary/tansport.php" method="post"	style="font-family:times;">
		用户: 
		<input type="text" name="username" />
		<br /><br/>
		密码: 
		<input type="password" name="password" /><br/>
		<input type="radio" name="identity" value="1" />管理员
		<input type="radio" name="identity" value="0"  checked="checked"/>普通用户<br/>
		<input type="submit" value="登陆" /> 	
</form>
<form name="sign_up" action="http://localhost/ctc/mylibrary/sign_up.php" method="get">
<input type="submit" value="注册" />
</form>
</div>
</body>
</html>
<!DOCTYPE html>
<?php
	@mysql_connect("localhost","root","")or	die("_mysql连接失败");
	@mysql_select_db("mylibrary")or	die("db连接失败");//连接数据库
	if(!empty($_POST['sub']))//判断是否有注册
	{
		if($_POST['password1']==$_POST['password2'])
		{
		$name=$_POST['username'];
		$password=$_POST['password1'];
		$sql="INSERT	INTO	user	(username,password,identity)	VALUES	($name,$password,0)";
		
		mysql_query	($sql);
		echo("成功注册");?><a	href="http://localhost/ctc/myliabary/login.php">点击进入主页面</a>
<?php
		}else{
			echo("密码不匹配");
		}
	}
?>
<html>
<head>
<title>我的图书馆注册</title>
<style>
		div{
			margin-top:200px;
			margin-right:300px;
			wdith:200px;
			height:250px;
			float:right;
			
		}
</style>
</head>
<body	background="http://localhost/ctc/mylibrary/sign_up.jpg"	>
	<div>
			<h3>新用户注册</h3>
			<form	name="input"	action="sign_up.php"	method="post">
				用户名&nbsp&nbsp&nbsp:	<input type="text" name="username" />
				<br />
				密码&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:	<input type="password" name="password1" />
				<br/>
				确认密码:
				<input	type="password"	name="password2"/>
				<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input	type="submit"	name="sub"	value="完成"/>
			</form>
	</div>
</body>
</html>
<!DOCTYPE	html>
<?php
	// include("conn.php");
	// if(!empty($_POST['sub'])){
	// $title=$_POST['title'];
	// $writer=$_POST['writer'];
	// $describe=$_POST['describe'];
	// $sql="INSERT INTO `mybook`( `title`, `writer`, `describe`, `dates`, `in_out`) VALUES ('$title','$writer','$describe',now(),0);";
	// $que=mysql_query($sql);
	// echo"<script>location.href='http://localhost/ctc/mylibrary/main.php'</script>";}
?>
<html>
<head>
	<title>图书添加界面</title>
	<style type="text/css">
		#main{
			height:600px 900px;
			margin:auto auto;
		}
		input {
			border: 1px solid #a7a9aa;
			border-radius: 5px;
			width: 150px; 
			height:26px; 
		}
		textarea{
			order: 1px solid #a7a9aa;
			border-radius: 5px;
		}
	</style>
</head>
<div  name="main" style="text-align:center;" >
<body background="http://localhost/ctc/mylibrary/add.jpg">
	<form	name="add"	action="do_add.php"	method="post" style="font-family:times;">
		书　　名：<input	type="text"	name="bname"/><br/> <br>
		作　　者：<input	type="text"	name="writer"/><br/> <br>
		出 版 社：<input	type="text"	name="publisher"/><br/> <br>
		价　　格：<input type="text" name="bprice"/><br/> <br>
		分类说明：<input type="text" name="btitle"/><br/> <br>
		出版时间：<input type="text" name="bdate"/><br/> <br>
		简　　介:<textarea	rows="5"	cols="50"	name="bdescripe"></textarea><br/> <br>
		<input	type="submit"	name="sub"	value="添加"/>
	</form>
</div>
</body>
</html>
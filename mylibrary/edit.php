<!DOCTYPE	html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<?php
	include "conn.php";
	$sql = "SELECT * FROM book,author,press WHERE bid = ".$_GET['id']." and book.aid = author.aid and book.pid = press.pid";
	$query = mysql_query($sql);
	$rs=mysql_fetch_array($query);
 ?>
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
			margin-top: 15px;
			text-align: center;
			line-height: 20px;
		}
		textarea{
			order: 1px solid #a7a9aa;
			border-radius: 5px;
			margin-top: 20px;
		}
	</style>
<html>
<head>
<title>图书修改界面
</title>
<style type="text/css">
</style>
</head>
<body background="http://localhost/ctc/mylibrary/add.jpg">
<div  style="text-align:center;">
<form	name="add"	action="do_edit.php"	method="post" style="font-family:times;">
			  <input type="hidden" name="bid" value="<?php echo $rs['bid']?>"/>
	书　　名：<input type="text" name="bname" value="<?php	echo	$rs['bname'];?>"/><br/>
	作　　者：<input type="text" name="aname" value="<?php	echo	$rs['aname'];?>"/><br/>
	价　　格：<input type="text" name="bprice" value="<?php	echo	$rs['bprice'];?>"/><br/>
	出 版 社：<input type="text" name="pname" value="<?php	echo	$rs['pname'];?>"/><br/>
	分类说明：<input type="text" name="title" value="<?php  echo    $rs['btitle']?>"/><br/>
	出版时间：<input type="text" name="bdate" value="<?php  echo    $rs['bdate']?>"/><br/>
	简　　介:		<textarea	rows="5"	cols="50"	name="bdescripe"><?php	echo	$rs['bdescripe'];?></textarea><br/>
				<input	type="submit"	name="sub"	value="修改"/>
</form>
</div>
</body>
</html>

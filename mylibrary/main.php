<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<?php
	include("conn.php");
	if(isset($_GET['keys'])){//判断搜索条件
		$key = $_GET['keys'];
		$sql = "SELECT * FROM book,author,press WHERE book.aid = author.aid AND book.pid = press.pid AND book.bname LIKE '%".$key."%'";
	}else{
		$sql="SELECT * FROM	book,author,press WHERE book.aid = author.aid AND book.pid = press.pid";
	}
	$query=mysql_query($sql);
?>
<html>
<head>
<title>书海NET
</title>
<style>
		#header{
				margin:0px auto;  
				width:900px; 
				height:50px;  
				}
		#main{
				margin:90px	20px;
				width:1300px;
				border:10px	40px;
				background-color:#ecd2b1;
		}
		.con {
			padding: 50px;
			width: 1200px;
			box-shadow: 1px 1px 3px grey;
			margin-top: 10px;
		}
		#navi{
			width: 800px;
			margin: 0 auto;
			height: 100px;
		}
		#navi a:link,#navi a:hover,#navi a:visited{
			text-decoration: none;
			color:black;
			margin-right: 20px;
			padding: 15px;
			display: block;
			height: 50px;
			width: 200px;
			float: left;
			opacity: 0.5;
		}
		#navi a:hover{
			opacity: 0.9;
		}
		input {
			border: 1px solid #a7a9aa;
			border-radius: 5px;
			width: 150px; 
			height:26px;
		}
		#sea{
			width: 60px;
		}
		#footer{
			float: right;
			width: 500px;
		}
		#footer a:link,#footer a:hover,#footer a:visited{
			text-decoration: none;
			color:black;
			margin-right: 20px;
			padding: 15px;
			display: block;
			height: 50px;
			width: 200px;
			float: right;
			opacity: 0.5;
			text-align: right;
		}
		#footer a:hover{
			opacity: 0.9;
		}
		
		
</style>
</head>
<body	background="http://localhost/ctc/mylibrary/main.jpg"	><br/><br/>
<h1	style=text-align:center;>网上图书查询</h1>

	<div	style="text-align:center;"	width:800px	height:	>
	
			<div	id="header">
				<h3>欢迎登陆图书查询系统</h3>
				<p	style=text-align:right;>
				<form	name="sel"	action="main.php"	method="get">
				<input	type="text"	name="keys"	/>
				<input	type="submit"	id="sea" name="sub"	value="搜索"/></form>

				</p>
				<div id="navi">
					<h4><a	href="add.php">添加图书</a></h4>
					<h4><a  href="writer.php">作者信息</a></h4>
					<h4><a  href="publisher.php">出版社信息</a></h4>
				</div>
			</div>
			
			<div	id="main"	>
				
					<?php
						while($rs=mysql_fetch_array($query)){
					?>
					<div class="con" style="text-align:left;border-radius:5px;">
					<h4	>
					<?php	echo	$rs['bname'];  ?> &nbsp;
					<?php	echo	$rs['aname']; ?> &nbsp;
					<?php	echo	$rs['bprice'];  ?> &nbsp;
					<?php	echo	$rs['bdate'];  ?> &nbsp;
					<?php   echo    $rs['pname'];  ?> 	
					</h4>
					<p><?php	echo	$rs['btitle'];  ?> &nbsp;</p>
					<p style="text-indent:2em;"><?php	echo	$rs['bdescripe'];?></p><br/>
					<div id="footer"><a	href="del.php?del=<?php	echo	$rs['bid'];?>">删除图书</a>	
					<a	href="edit.php?id=<?php echo $rs['bid']?>">修改图书</a>
					</div>
					</div>
					<?php
					}
					?>
				
			</div>
	</div>
</body>
</html>
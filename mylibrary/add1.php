<!DOCTYPE	html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<head>
	<title>作者添加界面</title>
	<style type="text/css">
		#main{
			height:600px 900px;
			margin:auto auto;
		}
	</style>
</head>
<div  name="main" style="text-align:center;" >
<body background="http://localhost/ctc/mylibrary/add.jpg">
	<form	name="add"	action="do_add1.php"	method="post" style="font-family:times;">
		姓　名：<input	type="text"	name="aname" value = ""/><br/> <br>
		性　别：<input	type="text"	name="asex"/><br/> <br>
		年　龄：<input	type="text"	name="aage"/><br/> <br>
		国　籍：<input type="text" name="acountry"/><br/> <br>
		简　介: <input type="text" name="abrief"/><br/> <br>
		<input	type="submit"	name="sub"	value="添加"/>
	</form>
</div>
</body>
</html>
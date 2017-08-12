<!DOCTYPE	html>
<?php
	include("conn.php");
	if(!empty($_GET['del'])){
		$d=$_GET['del'];
		$sql1="DELETE FROM book WHERE bid = ".$d."";
		$sql2 = "DELETE FROM has WHERE bid = ".$d."";
		$que1=mysql_query($sql1);
		$que2=mysql_query($sql2);
		echo "<script>location.href='http://localhost/ctc/mylibrary/main.php'</script>";
	}
?>
<html>
<head>
<title>图书删除界面
</title>
<style type="text/css">
</style>
</head>
<body>
</body>
</html>

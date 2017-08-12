<!DOCTYPE	html>
<?php
	include("conn.php");
	if(!empty($_GET['id'])){
		$d=$_GET['id'];
		$sql1="DELETE FROM author WHERE aid = ".$d."";
		$que1=mysql_query($sql1);
		echo "<script>location.href='http://localhost/ctc/mylibrary/writer.php'</script>";
	} else {
		echo "删除失败！";
		echo "<script>location.href='http://localhost/ctc/mylibrary/writer.php'</script>";

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

<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<?php 
	include "conn.php";
	$aname = $_POST['aname'];
	$asex = $_POST['asex'];
	$aage = $_POST['aage'];
	$acountry = $_POST['acountry'];
	$abrief = $_POST['abrief'];
	$sql0 = "SELECT aid FROM author WHERE aname = '".$aname."'";
	$query0 = mysql_query($sql0);
	$result0 = mysql_fetch_array($query0);
	if(!empty($result0)) {
		echo "作者已在系统中！";
		echo"<script>location.href='http://localhost/ctc/mylibrary/main.php'</script>";
	}
	if(empty($aname)) {
		echo "请写入作者的姓名";
		echo"<script>location.href='http://localhost/ctc/mylibrary/add1.php'</script>";
	} else {
		$sql = "INSERT INTO author(aname,aage,asex,acountry,abrief) VALUES ('".$aname."',".$aage.",".$asex.",'".$acountry."','".$abrief."')";
		$query = mysql_query($sql);;
		echo "<script>location.href='http://localhost/ctc/mylibrary/main.php'</script>";
	}
 ?>
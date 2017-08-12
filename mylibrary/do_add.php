<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<head>
	<title>信息添加界面</title>
	<style type="text/css">
		#main{
			height:600px 900px;
			margin:auto auto;
		}
	</style>
</head>
<div  name="main" style="text-align:center;" >
<body background="http://localhost/ctc/mylibrary/add.jpg">
<?php 
	include("conn.php");
	$publisher = $_POST['publisher'];
	$writer = $_POST['writer'];
	$sql0 = "SELECT aid FROM author WHERE aname = '".$writer."'";
	$query0 = mysql_query($sql0);
	$result0 = mysql_fetch_array($query0);

	$sql1 = "SELECT pid FROM press WHERE pname ='".$publisher."'";
	$query1 = mysql_query($sql1);
	$result1 = mysql_fetch_array($query1);

	$sql7 = "SELECT bid FROM book WHERE bname ='".$_POST['bname']."'";
	$query7 = mysql_query($sql7);
	$result7 = mysql_fetch_array($query7);

	if(empty($result7)) {
		if(empty($result0)) {
			$sql2 = "INSERT INTO author(aname) VALUES ('".$writer."')";
			$query2 = mysql_query($sql2);
		}
		if(empty($result1)) {
			$sql3 = "INSERT INTO press(pname) VALUES ('".$publisher."')";
			$query3 = mysql_query($sql3);
		}
		$sql4 = "SELECT aid FROM author WHERE aname = '".$writer."'";
		$query4 = mysql_query($sql4);
		$result4 = mysql_fetch_array($query4);

		$sql5 = "SELECT pid FROM press WHERE pname ='".$publisher."'";
		$query5 = mysql_query($sql5);
		$result5 = mysql_fetch_array($query5);

		$aid = $result4['aid'];
		$pid = $result5['pid'];

		$sql6 = "INSERT INTO book SET aid = ".$aid.",pid = ".$pid.",bprice = ".$_POST['bprice'].",btitle = '".$_POST['btitle']."',bdescripe = '".$_POST['bdescripe']."',bname = '".$_POST['bname']."',bdate = '".$_POST['bdate']."'";

		$query6 = mysql_query($sql6);
		if($query4) {
			echo "添加成功！";
			echo"<script>location.href='http://localhost/ctc/mylibrary/main.php'</script>";
		} else {
			echo "添加失败！";
			echo"<script>location.href='http://localhost/ctc/mylibrary/main.php'</script>";
		}
	} else {
		echo "图书已经在系统中！";
		echo"<script>location.href='http://localhost/ctc/mylibrary/main.php'</script>";
	}

?>
</div>
</body>
</html>
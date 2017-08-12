<?php 
	include "conn.php";
	$aname = $_POST['aname'];
	$pname = $_POST['pname'];
	$sql0 = "SELECT aid FROM author WHERE aname = '".$aname."'";
	$sql1 = "SELECT pid FROM press WHERE pname = '".$pname."'";
	$query0 = mysql_query($sql0);
	$query1 = mysql_query($sql1);
	$result0 = mysql_fetch_array($query0);
	$result1 = mysql_fetch_array($query1);
	$aid = $result0['aid'];
	$pid = $result1['pid'];
	$sql2 = "UPDATE book SET aid = ".$aid.",pid = ".$pid.",bprice = ".$_POST['bprice'].",btitle = '".$_POST['title']."',bdescripe = '".$_POST['bdescripe']."',bname = '".$_POST['bname']."',bdate = '".$_POST['bdate']."'WHERE bid = ".$_POST['bid']."";
	$query2 = mysql_query($sql2);
	if($query2) {
		echo "修改成功！";
		echo"<script>location.href='http://localhost/ctc/mylibrary/main.php'</script>";
	}
 ?>
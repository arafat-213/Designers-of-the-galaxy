<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$link = new mysqli("localhost", "root", "", "dotg");
	$res = $link->query("select max(billno) from bill");
	$row = mysqli_fetch_row($res);
	$billno = $row[0];
	$billno++;
	session_start();
	$us = $_SESSION['user'];
	$res = $link -> query("select sum(qty), sum(amount) from cart");
	$row = mysqli_fetch_row($res);
	$qty = $row[0];
	$amt = $row[1];
	$disc = $amt * .1;
	$pay = $amt - $disc;
	$link -> query("insert into bill values ($billno, '$us', $qty, $amt, $disc, $pay)");
	$link->query("delete from cart");
	$link->close();
?>
</body>
</html>
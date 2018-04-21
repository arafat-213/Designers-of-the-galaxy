<html>
<head>
<?php
$link=new mysqli("localhost","root","","dotg");
$na=$link->query("select distinct(tname) from catalog");
$size=$link->query("select distinct(tsize) from catalog");

$link->close();

if(!isset($_REQUEST['sub']))
{
?>

</head>
<body>

<form name="f1">

SELECT PIZZA : <select name="pname">
		
<?php
while($row=mysqli_fetch_row($na))
{
echo "<option value=$row[0]> $row[0] </option>";
}
?>					
		</select>
<br><br>

SELECT SIZE : <select name="psize">
<?php
while($row=mysqli_fetch_row($size))
{
echo "<option value=$row[0]> $row[0] </option>";
}
?>
	</select>
<br><br>
QUANTITY : <input type="text" name="pqt"> <br> <br>

<input type="submit" name="sub" value="ADD TO CART"> 
<input type="submit" name="sub" value="GENERATE BILL">
<input type="reset" name="res" value="CANCEL">
</form>

<?php
}
else
{
$sub=$_REQUEST['sub'];
if($sub=="ADD TO CART")
{
$pna=$_REQUEST['pname'];
$psi=$_REQUEST['psize'];
$qt=$_REQUEST['pqt'];

$link=new mysqli("localhost","root","","dotg");
$res=$link->query("select price from catalog where tname='$pna' and tsize='$psi'");
$row=mysqli_fetch_row($res);
$pr=$row[0];
$am=$pr*$qt;
//echo "<br><br> $pna , $psi , $pr , $qt , $am";

$link->query("insert into cart values('$pna','$psi',$pr,$qt,$am)");
$link->close();
header("location:order.php");
}
else
{
header("location:bill.php");
}



}
?>

</body>
</html>
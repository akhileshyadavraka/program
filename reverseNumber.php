<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Print Reverse Number</title>
</head>
<body style="text-align: center;color: blue;">
	<h2 style="color: green;">Print Reverse Number</h2>
	<form method="post">
		<input type="Number" name="num" placeholder="Enter a Number">
		<input type="submit" name="submit"><br><br>
	</form>
</body>
</html>


<?php
if(isset($_POST['submit'])){
$a=$_POST['num'];
$sum=0;
for ($b=$a; $b > 1; $b=($b/10)){
	$rev=$b%10;
	$sum=$sum*10+$rev;
}
 echo "Reverse Number of $a is : ".$sum;
}
?>
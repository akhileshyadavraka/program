<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Find Factorial Number</title>
</head>
<body style="color: red; text-align: center;">
	<h3 style="color:blue">Find Factorial Number</h3>
	<form method="post">
		<input type="text" name="num" placeholder="Enter A Number">
		<input type="submit" name="submit"><br><br>
	</form>
</body>
</html>



<?php
if (isset($_POST['submit'])) {
	// code...

$num=$_POST['num'];
$fact=1;

for ($i=2; $i <= $num; $i++) { 
	$fact=$fact*$i;
}
 echo "Factorial Of Number is : ".$num."<br>";
 echo "The Value Of Number is : ".$fact;


}

?>
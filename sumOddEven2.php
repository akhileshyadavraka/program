<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Find even/odd That Number</title>
</head>
<body style="color: red; text-align: center;">
	<h3 style="color:blue">Find even/odd That Number</h3>
	<form method="post">
		<input type="text" name="num" placeholder="Enter A Number">
		<input type="submit" name="submit"><br><br>
	</form>
</body>
</html>



<?php

if (isset($_POST['submit'])) {
	// code...

$n = $_POST['num'];

function oddeven($n){

$sum1=0;
$sum2=0;
 
for($c=1;$c<=$n;$c++)
{
$number= $c;
if($number%2==0)
{
$sum1=$sum1+$number;
}
else
{
$sum2=$sum2+$number;
}
 
}
echo "Sum of enen numbers = "."$sum1"."<br>";
echo "Sum of odd numbers = "."$sum2";
}

oddeven($n);
}

?>
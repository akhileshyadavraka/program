<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Find Armstrong That Number</title>
</head>
<body style="color: red; text-align: center;">
	<h3 style="color:blue">Find Armstrong That Number</h3>
	<form method="post">
		<input type="text" name="num" placeholder="Enter A Number">
		<input type="submit" name="submit"><br><br>
	</form>
</body>
</html>



<?php
if (isset($_POST['submit'])) {
	// code...

$num = $_POST['num'];   
$total=0;  

$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+($rem*$rem*$rem);  
$x=$x/10;  
}  
echo $total;
if($num==$total)  
{  
echo "Yes It is An Armstrong Number";
}  
else  
{  
echo "No It is Not An Armstrong Number";  
}  



}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Print Fibonacci Series </title>
</head>
<body style="color: red; text-align: center;">
	<h3 style="color:blue">Print Fibonacci Series</h3>
	<form method="post">
		<input type="text" name="num" placeholder="Enter A Number">
		<input type="submit" name="submit"><br><br>
	</form>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
$num = $_POST['num'];  


$n1 = 0;  
$n2 = 1;  
$i=0;
echo "<h3 style='color:green'>Fibonacci series $num numbers : </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($i < $num )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $i = $i + 1;  
}

}
?>

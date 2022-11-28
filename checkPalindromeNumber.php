<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check That Number is Palindrome</title>
</head>
<body style="color: red; text-align: center;">
	<h3 style="color:blue">Check That Number is Palindrone Or Not</h3>
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
$revnum=0;

for ($i=$num; $i > 1; $i=$i/10) { 
	$rem = $i%10;
	$revnum = ($revnum*10)+$rem;
}

if ($revnum==$num) {
	echo "This Number is Palindrome ";
}
else{

	echo "Not Number is Palindrome ";
}


}
?>

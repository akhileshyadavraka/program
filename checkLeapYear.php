<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check This Year Leap Or Not </title>
</head>
<body style="color: red; text-align: center;">
	<h3 style="color:blue">Check This Year Leap Or Not</h3>
	<form method="post">
		<input type="text" name="num" placeholder="Enter A Number">
		<input type="submit" name="submit"><br><br>
	</form>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
$num = $_POST['num'];  

if ($num%4==0) {
	echo "This Year Are Leap Year";
}else{
	echo "This Year Are Not Leap Year";
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Find Prime Number</title>
</head>
<body style="color: blue; text-align: center;">
	<h3>Find Prime Number</h3>
	<form method="post">
		<input type="text" name="num" placeholder="Enter A Number">
		<input type="submit" name="submit">
		<input type="reset">
	</form>
</body>
</html>



<?php
if (isset($_POST['submit'])) {
	// code...

$num=$_POST['num'];
$count=0;

for ($i=2; $i <= $num; $i++) { 
	if($num%$i==0){
		$count++;
	}
}
if ($count<2) {
	echo "Prime Number : ".$num;
}
else{
	echo "Not Prime Number : ".$num;
}


}

?>
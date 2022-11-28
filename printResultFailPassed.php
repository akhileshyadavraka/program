<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Print Result Fail Or Passed</title>
</head>
<body style="text-align: center;color: red;">
	<h3 style="color: blue;">Enter Your Subject And Number Then Find Result</h3>
	<form method="POST">
		<input type="text" name="sub1" placeholder="Enter First Subject">
		<input type="Number" name="num1" placeholder="First Number" required><br>
		<input type="text" name="sub2" placeholder="Enter Second Subject">
		<input type="Number" name="num2" placeholder="Second Number" required><br>
	    <input type="text" name="sub3" placeholder="Enter Third Subject">
		<input type="Number" name="num3" placeholder="Third Number" required><br>
	    <input type="text" name="sub4" placeholder="Enter Fourth Subject">
		<input type="Number" name="num4" placeholder="Fourth Number" required><br>
	    <input type="text" name="sub5" placeholder="Enter Fifth Subject">
		<input type="Number" name="num5" placeholder="Fifth Number" required><br><br>
	    <input type="submit" name="submit" style="width:177px" >
		<input type="reset" name="submit" style="width:177px"><br><br>
	</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {

// get Subject From User.
	$sub1 = $_POST['sub1'];
	$sub2 = $_POST['sub2'];
	$sub3 = $_POST['sub3'];
	$sub4 = $_POST['sub4'];
	$sub5 = $_POST['sub5'];

//get Number Of Subject From User.
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];
  $num4 = $_POST['num4'];
  $num5 = $_POST['num5'];

$sumMarks = $num1 + $num2 + $num3 + $num4 + $num5 ;

$perMarks = ($sumMarks * 100) / 500;

echo "<p style='color:green'>Your Total Marks of All Subject :
 ".$sumMarks."<br></p>";
echo "<p style='color:green'>Your Get Percantage of Subject :
 ".$perMarks."%"."<br></p>";

if ($num1<33) {
	echo "Your Are Fail in $sub1 : $num1 Number<br>";
}
if ($num2<33) {
	echo "Your Are Fail in $sub2 : $num2 Number<br>";
}
if ($num3<33) {
	echo "Your Are Fail in $sub3 : $num3 Number<br>";
}
if ($num4<33) {
	echo "Your Are Fail in $sub4 : $num4 Number<br>";
}
if ($num5<33) {
	echo "Your Are Fail in $sub5 : $num5 Number<br>";
}

// check for eligible next semester..

if ($num1<33 && $num2<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}
elseif ($num1<33 && $num3<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}
elseif ($num1<33 && $num4<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}
elseif ($num1<33 && $num5<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}

// check for eligible next semester..


elseif ($num2<33 && $num3<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}
elseif ($num2<33 && $num4<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}
elseif ($num2<33 && $num5<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}



// check for eligible next semester..


elseif ($num3<33 && $num4<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}
elseif ($num3<33 && $num5<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}


// check for eligible next semester..


elseif ($num4<33 && $num5<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}
elseif ($perMarks<33) {
	echo "<br>";
	echo "Your Are Not Eligible For Next Semester <br>";
}
else{
		echo "<br>";
		echo "Your Are Eligible For Next Semester <br>";
    echo "<br>";
		echo " <p style='color:blue;'>*** You Have Passed ***</p><br>";
}

echo "<br>";
echo "<p style='color:black;'>----Thanks For visit----</p>";
echo "<p style='color:black;'>----&copy copyright NIKHIL VISHWAKARMA----</p>";


}
?>
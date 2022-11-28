<h1 style="text-align: center;color: red;">Find Operation Of Two Variable</h1>
<fieldset>
	<legend style="text-align:center;color: blue;font-size: 30px;">Nikhil Vishwakarma</legend>
<form method="post" style="text-align:center;">
	<input type="number" name="number1" placeholder="Enter first Number"><br><br>
	<input type="number" name="number2" placeholder="Enter Second Number"><br><br>
	<select name="ddlop">
		<option value ="+" >Addition</option>
		<option value ="-" >Substraction</option>
		<option value ="*" >Multipication</option>
		<option value ="/" >Division</option>
	</select><br><br>
	<input type="submit" name="submit">
</form>
</fieldset>
<?php

if (isset($_POST['submit'])) {
	$num1 = $_POST['number1'];
	$num2 = $_POST['number2'];
	$operation = $_POST['ddlop'];
	$result=0;

	switch ($operation) {
		case '+':
			$result = $num1 + $num2;
			break;
		case '-':
			$result = $num1 - $num2;
			break;
		case '*':
			$result = $num1 * $num2;
			break;
		case '/':
			$result = $num1 / $num2;
			break;
		
		default:
			$result = "Invalid operation";
			break;
	}
	
	echo "<h1>$result</h1>";
}


?>
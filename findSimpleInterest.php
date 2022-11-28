<h1 style="text-align: center;color: red;">Find Simple Interast</h1>

<form method="post" style="text-align: center;">
	<input type="text" name="ammount" placeholder="Enter Your Amount" required><br><br>
	<input type="text" name="rate" placeholder="Enter Your Rate" required><br><br>
	<input type="text" name="time" placeholder="Enter Your Time" required><br><br>
	<input type="submit" name="submit">
</form>

<?php

if (isset($_POST['submit'])) {
	  $ammou = $_POST['ammount'];
	  $rate = $_POST['rate'];
	  $time = $_POST['time'];

	  $calculation = $rate * $time;

	  $simple = 1+$calculation;

	  echo $simple * $ammou;  

}


?>
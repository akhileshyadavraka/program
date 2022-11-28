<?php

$array=[1,2,3,['name'=>'alex','phone'=>'203040'],6,[23,56,9,1],7,9];

for ($i=0; $i <= 7; $i++) 
{ 
	if ($i==3) 
	{
		foreach ($array[3] as $key => $value) {
		 	echo $key . " => " . $value."<br>";
		}
	}
	else if ($i==5) 
	{
			for ($c=0; $c <= 3; $c++) 
			{ 	
				echo $array[$i][$c]."<br>";
		     }
	}
	       else{
	         	echo $array[$i]."<br>";
	        }
}

?>
<?php

$array=[1,2,3,[1,2],6,[23,56,9,1]];

for ($i=0; $i <= 5; $i++) 
{ 
	if ($i==3) 
	{
		for ($b=0; $b <= 1; $b++) { 
			echo $array[$i][$b]."<br>";
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
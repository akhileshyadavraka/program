<?php

$a=[3,1,4,2,4,8,5,9,4,6,4,3,8,9,1];

$count=count($a);

for ($i=0; $i < $count; $i++) { 
	for ($j=$i+1; $j < $count; $j++) { 
		if ($a[$i]>$a[$j]) {
			$so=$a[$i];
			$a[$i]=$a[$j];
			$a[$j]=$so;
		}
	}
}

echo "<pre>";
print_r($a);
?>
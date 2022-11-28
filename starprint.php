<?php

/*for($i=1; $i<=5; $i++){
	for($j=1; $j<=$i; $j++){
		echo "*";
	}
	echo "<br>";
}


echo "<hr>";//---------------------------

for($i=1; $i<=5; $i++){
	for($j=5; $j>=$i; $j--){
		echo "*";
	}
	echo "<br>";
}

echo "<hr>";//--------------------------


for($i=1; $i<=5; $i++){
	for($j=1; $j<=$i; $j++){
		echo "*";
	}
	echo "<br>";
}
for($i=1; $i<=5; $i++){
	for($j=5; $j>=$i; $j--){
			if($j==5){

		}
		else{
		echo "*";
	}
	}
	echo "<br>";
}


echo "<hr>";//----------


for($i=1; $i<=7; $i++){
	for($j=1; $j<=$i; $j++){
		echo "*";
	}
	echo "<br>";
}
for($i=1; $i<=7; $i++){
	for($j=7; $j>=$i; $j--){
		if($j==7){

		}
		else{
		echo "*";
	}
	}
	echo "<br>";
}

echo "<hr>";//-----------------

	for($i=1;$i<=8;$i++){
		for($j=1;$j<=($i-1);$j++){
			echo "&nbsp ";
		}
		for ($k=1; $k<=(9-$i) ; $k++) { 
			echo "*";
		}
		echo "<br>";
}*/


for($i=1; $i<=7;$i++){
	if($i==2){

	}
	elseif($i==4){

}
elseif($i==6){

}
		else{
	
	
	for($j=7;$j>=$i;$j--){
		echo "&nbsp";
	}
	for($k=1;$k<=$i;$k++){
		echo "*";
	}

		
		echo "<br>";
	}

}
for($i=6;$i>=1;$i--){
	if($i==6){

	}
	elseif($i==4){

}
elseif($i==2){

}
	else{
	for($j=7;$j>=$i;$j--){
		echo "&nbsp";
	}
	for($k=1;$k<=$i;$k++){
		echo "*";
	}
	echo "<br>";
}
}
?>

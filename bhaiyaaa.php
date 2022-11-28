<?php
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
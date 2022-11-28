<?php
for($i=1; $i<=6;$i++){
	if($i==1){

	}
	elseif($i==3){

}
elseif($i==5){

}
		else{
	
	
	for($j=6;$j>=$i;$j--){
		echo "&nbsp";
	}
	for($k=1;$k<=$i;$k++){
		echo "*";
	}

		
		echo "<br>";
	}

}
for($i=5;$i>=1;$i--){
	if($i==5){

	}
	
elseif($i==1){

}
elseif($i==3){

}
	else{
	for($j=6;$j>=$i;$j--){
		echo "&nbsp";
	}
	for($k=1;$k<=$i;$k++){
		echo "*";
	}
	echo "<br>";
}
}

?>
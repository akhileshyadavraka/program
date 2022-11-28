<?php  
$array=[2,3,[4,5,6],7,8];

for($i=0; $i<5; $i++){
    if($i==2){
        for($j=0; $j<3; $j++){
            echo $array[$i][$j]."<br>";
        }
    }
    else{
        echo $array[$i].'<br>';
    }
}

?>
<?php  
$array=[2,3,['id'=>'3','name'=>'akhilesh','email'=>'akhilesh@gmail.com'],7,8];

for($i=0; $i<5; $i++){
    if($i==2){
        foreach ($array[$i] as $key => $value){
            echo $key.'=>'.$value."<br>";
        }
    }
    else{
        echo $array[$i].'<br>';
    }
}

?>
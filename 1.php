<?php 
$family = array("Sachin","Suranjan","Bond","Don");

foreach($family as $key => $value ){
   $value = $value. " cv";
   
    echo $key." element of array is ".$value."<br>";

}

$i = 1;
while($i < 10){
    echo 5*$i."<br>";
    $i++;
}
$i = 5;
while($i < 50){
    echo $i."<br>";
    $i = $i + 5;
 }

$family = array("Rob","kirsten","ralphy","Tommy");
$i = 0;
while($i < sizeof($family)){
    echo $family[$i]."<br>";
    $i++;
}


?>
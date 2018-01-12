<?php

if($_GET) {
    $i = 2;
    $isPrime= true;
    while ($i < $_GET['number']){
        if ($_GET['number'] % $i == 0){
            $isPrime = false;
        }
        $i++;
    }
    if($isPrime){
        echo "is Prime";
    }else{
        echo "not Prime";
    }
}

?>

<p>What's your name?</p>
<form>
    <input name="number" type="text">
    <input type="submit" value="Go!">

</form>
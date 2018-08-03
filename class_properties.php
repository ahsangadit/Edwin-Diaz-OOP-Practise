<?php

class cars{

    var $wheel=4;
    var $door=4;

    function car_details(){
        return "This car has " . $this->wheel . " Wheels.";
    }
} 

$bmw=new cars();
$mercedes=new cars();

echo $bmw->wheel=10;

echo "<br>";

echo $bmw->door;

echo "<br>";

 echo $mercedes->car_details();

?>
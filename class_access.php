<?php

class car{
    public $wheel=4;
    private $door=4;
    protected $seat=4;

    function car_detail()
    {
        echo $this->wheel. "<br>";
        echo $this->door. "<br>";
        echo $this->seat. "<br>";
    }
}

$bmw=new car();

// echo $bmw->wheel;
// echo $bmw->door;
// echo $bmw->seat;

$bmw->car_detail();


?>
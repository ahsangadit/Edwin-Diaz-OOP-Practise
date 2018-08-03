<?php

class cars{
    
    var $wheel=4;
    
    function car_detail()
    {
        echo "<br> hello <br>";
    }
}

$bmw=new cars();
echo $bmw->wheel;


class truck extends cars{

}

$tocomo=new truck();

$tocomo->car_detail();
echo $tocomo->wheel=10;
?>
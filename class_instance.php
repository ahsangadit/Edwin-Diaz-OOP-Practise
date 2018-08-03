<?php

class cars
{
    function greeting()
    {
        echo "Bmw is my favourite. <br>";
    }

    function greeting2()
    {
        echo "Mercedes is my favourite. <br>";
    }
}

$bmw= new cars();
$mercedes =new cars();

$bmw->greeting();
$mercedes->greeting2();

?>
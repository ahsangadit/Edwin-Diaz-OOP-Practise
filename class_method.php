<?php

class cars{

    function greeting()
    {

    }

    function greeting2()
    {

    }
}

$var=get_class_methods('cars');

foreach($var as $method){

    echo $method. "<br>";
}


?>
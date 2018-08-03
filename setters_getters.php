<?php
/**
 * Created by PhpStorm.
 * User: Ahsan Gadit
 * Date: 8/4/2018
 * Time: 1:06 AM
 */

class cars{

    private $doors=4;

    function get_value(){

        echo $this->doors ."<br>";
    }

    function set_value(){
        $this->doors=10 ."<br>";
    }

}

$bmw=new cars();

$bmw->get_value();

$bmw->set_value();

$bmw->get_value();
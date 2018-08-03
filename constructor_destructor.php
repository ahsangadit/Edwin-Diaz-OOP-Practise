<?php
/**
 * Created by PhpStorm.
 * User: Ahsan Gadit
 * Date: 8/4/2018
 * Time: 1:39 AM
 */

class cars{

    public $doors=4;
    static $seat=6;

    function __construct()
    {
        echo $this->doors;
        echo cars::$seat++ . "<br>";
    }

}

$bmw= new cars();

$hilux= new cars();

$landcrusier= new cars();
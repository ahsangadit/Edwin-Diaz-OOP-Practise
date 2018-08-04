<?php
/**
 * Created by PhpStorm.
 * User: Ahsan Gadit
 * Date: 8/4/2018
 * Time: 8:56 PM
 */

class cars{

    static $wheel=4;
    public $door=6;
    private $window=6;


    function __construct()
    {
       echo $this->door=5 ."<br>";
        echo $this->wheel=5 ."<br>";
        echo $this->window=5 ."<br><br>";

    }



    function details()
    {
        echo $this->door ;
        echo $this->window;
        echo cars::$wheel=12 . "<br>";
    }

    static  function  cardetail()
    {

        echo cars::$wheel;

    }

}


class truck extends cars{

    static function carss()
    {
        parent::$wheel=10 ;
    }


}


$mehran=new cars();

$mehran->details();
truck:: carss();

cars::cardetail();



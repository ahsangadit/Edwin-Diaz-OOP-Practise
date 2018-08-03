<?php
/**
 * Created by PhpStorm.
 * User: Ahsan Gadit
 * Date: 8/4/2018
 * Time: 1:22 AM
 */

class cars{

    static $doors=4;
    static $seat =4;

    static function car_detail()
    {
        echo self::$doors;
        echo self::$seat;
    }

}
//$bmw=new cars();
//$bmw->car_details();


class truck extends cars{

    static function  display()
    {
        echo "Total seats are" .parent::$seat. "<br>";
        echo "Total doors are" .parent::$doors. "<br>";
        parent::car_detail();
    }

}

truck::display();
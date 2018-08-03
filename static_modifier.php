<?php
/**
 * Created by PhpStorm.
 * User: Ahsan Gadit
 * Date: 8/4/2018
 * Time: 12:52 AM
 */
class cars{

    static $doors=4;
    static $seat =4;

    static function car_detail()
    {
        echo cars::$doors;
        echo cars::$seat;
    }

}
//$bmw=new cars();
//$bmw->car_details();

echo cars::$doors;
echo cars::car_detail();
<?php
/**
 * Created by PhpStorm.
 * User: Ahsan Gadit
 * Date: 8/4/2018
 * Time: 11:40 PM
 */

require_once ("config.php");

class Database{

    private $connection;

public function open_db_connection(){
    $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno())
    {
        die("Database connect failed badly" . mysqli_error());
    }
 }

}

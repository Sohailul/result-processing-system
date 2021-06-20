<?php
/**
 * Created by PhpStorm.
 * User: Sohailul Alam
 * Date: 5/30/2019
 * Time: 9:34 PM
 */

class RPS
{
    private function connect()
    {
        $server = "localhost";
        $user = "root";
        $password = "";
        $dbName = "rps_db";
        //mysqli_connect($server,$user,$password,$dbName);
        mysqli_connect('localhost','root','','rps_db');
    }
    public function studentSave()
    {
        $sql = "";
        $result = mysqli_query($this->connect(), $sql);

    }
}


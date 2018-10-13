<?php
/**
 * Created by PhpStorm.
 * User: vesel
 * Date: 10/11/2018
 * Time: 7:43 PM
 */

class DBConnection
{

    public static function getConnection(){
        return new PDO('mysql:host=localhost;dbname=shop','root','',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
}
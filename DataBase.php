<?php

/**
 * Created by PhpStorm.
 * User: Local
 * Date: 13.09.2017
 * Time: 16:36
 */
class DataBase
{
    public static $mConnect;	// Хранит результат соединения с базой данных
    public static $mSelectDB;	// Хранит результат выбора базы данных
    public static function Connecting($host,$user,$pass,$name){
        self::$mConnect = mysqli_connect($host, $user, $pass);
        if(!self::$mConnect){
            echo "Ошибка";
            exit();
            return false;
        }
    }
}
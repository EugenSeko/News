<?php

/**
 * Created by PhpStorm.
 * User: y
 * Date: 19.10.2015
 * Time: 18:11
 */
class Sin_mysqli extends mysqli
{

    private static $_instance = null;


    public static function get_instance(){
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function Sin_mysqli(){
        parent::__construct('localhost','root','root','test');
        if(mysqli_connect_error()){
            die('Ошибка подключения (' . mysqli_connect_errno() . ' )' . mysqli_connect_error());
        }
        else echo 'Подключение к базе: test';
    }

}
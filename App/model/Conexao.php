<?php

namespace App\Model;

class Conexao {

    private static $instance;

    public static function getConn(){

        if(!isset(self::$instance)){
            self::$instance = new \PDO("mysql:host=localhost;dbname=pdocrud;charset=utf8", "root", "");
        }

        return self::$instance;
    }

}
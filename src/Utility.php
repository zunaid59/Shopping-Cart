<?php
/**
 * Created by PhpStorm.
 * User: Zunaid
 * Date: 10/29/2017
 * Time: 11:54 PM
 */

namespace App;


class Utility
{
    public static function d($data){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }

    public static function dd($data){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }


    public static function redirect($data){
        header('Location:'.$data);

    }

}
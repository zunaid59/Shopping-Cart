<?php

namespace App;
use PDO, PDOException;

class Database
{       public $DBH;

    public function __construct()
    {
        try{

            $this->DBH = new PDO('mysql:host=localhost;dbname=onlineShop',"root","");
            $this->DBH->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            //echo "Database conncetion successful!<br>";
        }

        catch(PDOException $error){

            echo "Database error:".$error->getMessage();
        }

    }


}
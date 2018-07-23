<?php

namespace App;

use App\Database as DB;

use App\Message;

use App\Utility;

use PDO;


class Brand extends DB
{
    private $id;

    private $brandName;


    public function setData($allPostData = null)
    {

        if (array_key_exists("id", $allPostData)) {


            $this->id = $allPostData['id'];
        }

        if (array_key_exists("brand_name", $allPostData)) {


            $this->brandName = $allPostData['brand_name'];
        }


    }

    public function store(){

        $arrData = array($this->brandName);

        $query= 'INSERT INTO  tbl_brand(brandName) VALUE (?)';

        $STH = $this->DBH->prepare($query);

        $result = $STH->execute($arrData);

        if($result){

            Message::setMessage("Success!Data has been stored successfully!");

        }
        else{

            Message::setMessage("Failed!Data has not been stored!");
        }

        utility :: redirect('brandList.php');

    }

    public function index(){

        $sql = 'SELECT * FROM tbl_brand ORDER BY brandID';

        $STH = $this->DBH->query($sql);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        return $STH->fetchAll();
    }


    public function view(){

        $sql = "Select * from tbl_brand where brandID=" . $this->id;
        $STH = $this->DBH->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetch();
    }


    public function update(){

        $arrData = array($this->brandName);

        $query= "UPDATE  tbl_brand SET brandName = ? WHERE brandID=". $this->id;


        $STH = $this->DBH->prepare($query);

        $result = $STH->execute($arrData);



        if($result){

            Message::setMessage("Success!Data has been updated successfully!");

        }
        else{

            Message::setMessage("Failed!Data has not been updated!");
        }

        utility :: redirect('brandList.php');



    }

    public function delete(){

        $sql= "DELETE FROM  tbl_brand WHERE brandID=".$this->id;

        $result = $this->DBH->exec($sql);

        if($result){

            Message::setMessage("Success! Brand name has been deleted!");
        }

        else{

            Message::setMessage("Failed! Brand name has not been deleted");
        }

        utility ::redirect('brandList.php');

    }


}
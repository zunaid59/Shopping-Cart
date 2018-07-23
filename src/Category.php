<?php

namespace App;

use App\Database as DB;

use App\Message;

use App\Utility;

use PDO;


class Category extends DB
{
    private  $id;

    private  $categoryName;


    public function setData($allPostData=null)
    {

        if (array_key_exists("id", $allPostData)) {


            $this->id = $allPostData['id'];
        }

        if (array_key_exists("category_name", $allPostData)) {


            $this->categoryName = $allPostData['category_name'];
        }


    }

    public function store(){

        $arrData = array($this->categoryName);

        $query= 'INSERT INTO  tbl_category(categoryName) VALUE (?)';

        $STH = $this->DBH->prepare($query);

        $result = $STH->execute($arrData);

        if($result){

            Message::setMessage("Success!Data has been stored successfully!");

        }
        else{

            Message::setMessage("Failed!Data has not been stored!");
        }

        utility :: redirect('categoryList.php');



    }

    public function view(){

        $sql = "Select * from tbl_category where categoryID=" . $this->id;
        $STH = $this->DBH->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        return $STH->fetch();
    }

    public function index(){

        $sql = 'SELECT * FROM tbl_category ORDER BY categoryID';

        $STH = $this->DBH->query($sql);

        $STH->setFetchMode(PDO::FETCH_OBJ);

        return $STH->fetchAll();
    }


    public function update(){

        $arrData = array($this->categoryName);

        $query= "UPDATE  tbl_category SET categoryName = ? WHERE categoryID=". $this->id;


        $STH = $this->DBH->prepare($query);

        $result = $STH->execute($arrData);



        if($result){

            Message::setMessage("Success!Data has been updated successfully!");

        }
        else{

            Message::setMessage("Failed!Data has not been updated!");
        }

        utility :: redirect('categoryList.php');



    }

    public function delete(){

        $sql= "DELETE FROM  tbl_category WHERE categoryID=".$this->id;


        $result = $this->DBH->exec($sql);

        if($result){

            Message::setMessage("Success! Data has been deleted!");
        }

        else{

            Message::setMessage("Failed! Data has not been deleted");
        }

        utility ::redirect('categoryList.php');

    }

}
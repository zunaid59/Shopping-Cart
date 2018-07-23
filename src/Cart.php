<?php
/**
 * Created by PhpStorm.
 * User: Shabber
 * Date: 2/11/2018
 * Time: 10:21 PM
 */

namespace App;

use App\Database as DB;
use PDO;

class Cart extends DB
{
      private $id;
      private $quantity;

      public function setData($allPostData = NULL){

          if(array_key_exists("id",$allPostData)){

              $this->id = $allPostData['id'];
          }

          if(array_key_exists('quantity',$allPostData)){

              $this->quantity = $allPostData['quantity'];
          }
      }











    public function addToCart($productID){

       //$Quantity = $quantity;
        $ProductID = $productID;
        $sessionID = session_id();
        echo $sessionID;
        exit();
        $sql= "SELECT * FROM tbl_product WHERE productID=".$ProductID;
        $STH = $this->DBH->query($sql);
        $result=$STH->fetch();
        $productName = $result['productName'];
        $price = $result['price'];
        $image = $result['image'];

        $query ="INSERT INTO tbl_cart(sessionID,productID,productName,price,,image)VALUES ('$sessionID','$productID','$productName','$price','$image')";
        $STH = $this->DBH->prepare($query);
        if($STH){
            echo "success";
        }
        else{
            echo "not inserted";
        }
    }


}
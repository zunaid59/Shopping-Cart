<?php


namespace App;
use App\Database as DB;

use App\Message;


use App\Utility;
use PDO;



            class Product extends DB
            {
                private $productID;

                private $productName;

                private $categoryID;

                private $brandID;

                private $description;

                private $price;

                private $image;

                private $type;

                public function setData($allPostData = Null)
                {

                    if (array_key_exists("id", $allPostData)) {

                        $this->productID = $allPostData['id'];
                    }

                    if (array_key_exists("productName", $allPostData)) {

                        $this->productName = $allPostData['productName'];
                    }

                    if (array_key_exists("categoryID", $allPostData)) {

                        $this->categoryID = $allPostData['categoryID'];
                    }

                    if (array_key_exists("brandID", $allPostData)) {

                        $this->brandID = $allPostData['brandID'];
                    }

                    if (array_key_exists("description", $allPostData)) {

                        $this->description = $allPostData['description'];
                    }

                    if (array_key_exists("price", $allPostData)) {

                        $this->price = $allPostData['price'];
                    }


                    if (array_key_exists("image", $allPostData)) {

                        $this->image =$allPostData['image'];
                    }


                    if (array_key_exists("productType", $allPostData)) {

                        $this->type = $allPostData['productType'];
                    }
                }


                public function store(){

                    $arrData = array($this->productName,$this->categoryID,$this->brandID,$this->description,$this->price,$this->image,$this->type);


                    $query = "INSERT INTO tbl_product(productName,categoryID,brandID,description,price,image,type)VALUES
                              (?,?,?,?,?,?,?)";

                    $STH = $this->DBH->prepare($query);

                    $result = $STH->execute($arrData);

                    if($result){

                        Message::setMessage("Success!Data has been stored successfully!");

                    }
                    else{

                        Message::setMessage("Failed!Data has not been stored!");
                    }

                    utility :: redirect('productList.php');

                }


                public function view()
                {
                    $sql ='SELECT  *  FROM  tbl_product  WHERE  productID='.$this->productID;
                    $STH = $this->DBH->query($sql);
                    $STH->setFetchMode(PDO::FETCH_OBJ);
                    return $STH->fetch();
                }

                public function index()
                {
                    $sql = "SELECT tbl_product.*, tbl_category.categoryName, tbl_brand.brandName
                            FROM tbl_product
                            INNER JOIN  tbl_category
                            ON tbl_product.categoryID = tbl_category.categoryID
                            INNER JOIN tbl_brand
                            ON tbl_product.brandID = tbl_brand.brandID
                            ORDER BY tbl_product.productID";

                    $STH = $this->DBH->query($sql);

                    $STH->setFetchMode(PDO::FETCH_OBJ);

                    return $STH->fetchAll();

                }

                public function update(){

                    $arrData = array($this->productName,$this->categoryID,$this->brandID,$this->description,$this->price,$this->type);

                    $query = "UPDATE tbl_product SET productName = ?, categoryID = ?, brandID = ?, description = ?, price = ?, type = ?
                              WHERE  productID= " . $this->productID;

                    $STH = $this->DBH->prepare($query);

                    $result = $STH->execute($arrData);


                    if($result){

                        Message::setMessage("Success!Data has been updated successfully!");

                    }
                    else{

                        Message::setMessage("Failed!Data has not been updated!");
                    }

                    utility :: redirect('productList.php');


                }

                public function delete()
                {

                    $query = 'SELECT  *  FROM  tbl_product  WHERE  productID= ' . $this->productID;

                    $STH = $this->DBH->query($query);

                    $img = $STH->fetch();

                    if ($deleteIMG = $img) {
                        $deleteLINK = $deleteIMG['image'];

                        unlink($deleteLINK);

                    }
                        $sql = "DELETE FROM tbl_product WHERE productID=" . $this->productID;

                        $result = $this->DBH->exec($sql);

                        if ($result) {

                            Message::setMessage("Failed! Data has not been deleted");

                        } else {

                            Message::setMessage("Success! Data has been deleted!");


                            utility::redirect('productList.php');
                        }

                }


                public function getfeaturedProduct(){

                    $sql = 'SELECT  *  FROM  tbl_product  WHERE  type="0" ORDER BY productID ';
                    $STH = $this->DBH->query($sql);
                    $STH->setFetchMode(PDO::FETCH_OBJ);
                    return $STH->fetchAll();


                }

                public function getgeneralProduct(){

                    $sql = 'SELECT  *  FROM  tbl_product WHERE  type="1"  ORDER BY productID ';
                    $STH = $this->DBH->query($sql);
                    $STH->setFetchMode(PDO::FETCH_OBJ);
                    return $STH->fetchAll();


                }

                public function getSingleProduct(){
                    $sql = "SELECT tbl_product.*, tbl_category.categoryName, tbl_brand.brandName
                            FROM tbl_product
                            INNER JOIN  tbl_category
                            ON tbl_product.categoryID = tbl_category.categoryID
                            INNER JOIN tbl_brand
                            ON tbl_product.brandID = tbl_brand.brandID
                            AND tbl_product.productID = ".$this->productID;
                    $STH = $this->DBH->query($sql);
                    $STH->setFetchMode(PDO::FETCH_OBJ);
                    return $STH->fetchAll();
                }

            }

<?php
require_once("../../vendor/autoload.php");

use App\Message;

$product= new App\Product();

$allData =$product->index();

if(!isset($_SESSION)){
    session_start();
}

$msg = Message::getMessage();

echo "<div style='height: 30px'> <div  id='message'> $msg </div> </div>";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link rel="stylesheet" href="../../resource/css/bootstrap.min.css">
    <script src="../../resource/js/bootstrap.min.js"></script>
    <style>
        th{
            text-align: center;
        }
        td{
            text-align: center;
        }

    </style>

</head>
<body>
<div class="container">
    <a href='addProductInformation.php' class='btn btn-info'>Add</a>
    <h1 align="center">Product List &nbsp;&nbsp;&nbsp;
    </h1>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" cellspacing="0" align="center">
            <tr>
                <th>Serial No.</th>
                <th>ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Product Type</th>
                <th>Action Button</th>
            </tr>
            <?php

            $serial = 1;

            foreach($allData as $oneData){
                if($serial%2)$bgColor="#cccccc";
                else $bgColor = "#ffffff";

                ?>
                <tr style='background-color:<?php echo $bgColor ?>'>

                    <td><?php echo $serial ?></td>
                    <td><?php echo $oneData->productID?></td>
                    <td> <?php echo $oneData->productName?></td>
                    <td> <?php echo $oneData->categoryName?></td>
                    <td> <?php echo $oneData->brandName?></td>
                    <td><?php echo $oneData->description?></td>
                    <td><?php echo $oneData->price?>Tk.</td>
                    <td><img src="../../resource/image/<?php echo $oneData->image?>" height="50" width="60" alt=""></td>
                    <td><?php if($oneData->type==0){
                            echo 'Featured';
                        }else{
                            echo 'General';
                        }

                        ?>
                    </td>

                    <td>
                        <a href="editProduct.php?id=<?php echo $oneData->productID ?>" class='btn btn-primary btn-sm'>Edit</a>
                        <a href='delete.php?id=<?php echo $oneData->productID ?>' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>
                <?php
                $serial++;
            }

            ?>



        </table>
    </div>


</div>
<!---
<script src="../../resource/js/jquery-1.11.1.min.js"></script>

<script>
    jQuery(function($) {
        $('#message').fadeOut (550);
        $('#message').fadeIn (550);
        $('#message').fadeOut (550);
        $('#message').fadeIn (550);
        $('#message').fadeOut (550);
        $('#message').fadeIn (550);
        $('#message').fadeOut (550);
    })


    $('tbody').delegate('.qty,.price,.totalAmount','keyup',function(){
        alert('test');
    });
    $('.addRow').on('click',function(){

        addRow();
    });

    function addRow(){
        var tr = '<tr>'+
            '<td><input type="text" name="medicineName" class="form-control-sm"></td>'+
            '<td><input type="number" class="form-control-sm quantity" name="quantity"></td>'+
            '<td><input type="number" class="form-control-sm price" name="price"></td>'+
            '<td><input type="number" class="form-control-sm totalAmount" name="totalAmount"></td>'+
            '<td><input type="submit" class="btn btn-info btn-sm" value="ADD"></td>'+
            '</tr>';
        $('tbody').append(tr);
    }

</script>
</script>--->
<?php
require_once("../../vendor/autoload.php");

use App\Message;

$category  = new App\Category();

$allData =$category->index();

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
    <title>Category - Active List</title>
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
    <a href='addCategory.php' class='btn btn-info'>Add</a>
    <h1 align="center">Category - Active List &nbsp;&nbsp;&nbsp;
    </h1>
    <table class="table table-striped table-bordered" cellspacing="0" align="center">
        <tr>
            <th>Serial No.</th>
            <th>ID</th>
            <th>Category Name</th>
            <th>Action Button</th>
        </tr>

        <?php

        $serial = 1;

        foreach($allData as $oneData){
            if($serial%2)$bgColor="#cccccc";
            else $bgColor = "#ffffff";

            echo "
                <tr style='background-color: $bgColor'>
                    <td>$serial</td>
                    <td>$oneData->categoryID</td>
                    <td>$oneData->categoryName</td>

                    <td><a href='view.php?id=$oneData->categoryID' class='btn btn-info'>View</a>
                        <a href='editCategory.php?id=$oneData->categoryID' class='btn btn-primary'>Edit</a>
                        <a href='delete.php?id=$oneData->categoryID' class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
              ";
            $serial++;
        }


        ?>



    </table>

</div>

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
</script>
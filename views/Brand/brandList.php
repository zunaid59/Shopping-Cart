<?php
require_once("../../vendor/autoload.php");

$brand  = new App\Brand();

$allData =$brand ->index();

use App\Message;

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
    <title>Brand - Active List</title>
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
    <a href='addBrand.php' class='btn btn-info'>Add</a>
    <h1 align="center">Brand - Active List &nbsp;&nbsp;&nbsp;
    </h1>
    <table class="table table-striped table-bordered" cellspacing="0" align="center">
        <tr>
            <th>Serial No.</th>
            <th>ID</th>
            <th>Brand Name</th>
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
                    <td>$oneData->brandID</td>
                    <td>$oneData->brandName</td>

                    <td>
                        <a href='editBrand.php?id=$oneData->brandID' class='btn btn-primary'>Edit</a>
                        <a href='delete.php?id=$oneData->brandID' class='btn btn-danger'>Delete</a>
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
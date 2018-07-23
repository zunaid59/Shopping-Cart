<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>City Name - Active List</title>
    <link rel="stylesheet" href="../../resource/css/bootstrap.min.css">
    <script src="../../resource/js/bootstrap.min.js"></script>

    <style>
        div{
            background-color: aliceblue;
            width: 30%;
            height: 100px;
            margin-top: 200px;
            margin-left: 450px;
            padding-top: 30px;
            border-radius: 5px;
            hover
        }

    </style>
</head>
<body>
<div align="center" >

    <?php
    require_once("../../vendor/autoload.php");

    $brand = new \App\Brand();
    $brand ->setData($_GET);

    $id = $_GET['id'];


    echo" <b><i>Are Your Sure?&nbsp;&nbsp;</i></b>";

    echo "<a href='delete.php?Yes=1&id=$id' class='btn btn-info'>Yes</a>
      <a href='brandList.php' class='btn btn-info'>No</a>

";
    if(isset($_GET['Yes'])) {
        $brand ->setData($_GET);
        $oneData=   $brand ->delete();
    }
    ?>

</div>
</body>

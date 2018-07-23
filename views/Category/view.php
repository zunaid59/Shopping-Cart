<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>  </title>
    <link rel="stylesheet" href="../../resource/css/bootstrap.min.css">
    <script src="../../resource/js/bootstrap.min.js"></script>


    <style>
        td{
            border: 1px;
        }

        table{
            margin-top: 100px;
            border: 1px;
        }

        tr{
            height: 30px;
        }
    </style>



</head>
<body>

<?php
require_once("../../vendor/autoload.php");


$category  = new \App\Category();
$category->setData($_GET);
$oneData =$category->view();


echo "
  <div class='container'>
    <h1 align='center'> Single Category Information  </h1>
    <table class='table table - striped table - bordered' cellspacing='0px' align='center' cellpadding='5px'>

        <tr>
           <td>ID: </td>
           <td> $oneData->categoryID </td>
       </tr>


       <tr>
           <td>Category Name: </td>
           <td> $oneData->categoryName </td>
       </tr>

    </table>

  </div>

";

?>

</body>
</html>
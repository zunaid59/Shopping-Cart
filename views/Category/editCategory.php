<?php
require_once("../../vendor/autoload.php");

use App\Message;

if(!isset($_SESSION)) session_start();

$msg = Message::getMessage();
echo "<div id='message'></div>";

$_SESSION['message'] ="";

$category  = new \App\Category();
$category->setData($_GET);
$oneData =$category->view();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Title Create Form</title>
</head>
<body>
<form action="update.php" method="post">

     Category :
    <input type="text" name="category_name" value="<?php echo $oneData->categoryName;?>"><br><br>
    <input type="hidden" name="id" value="<?php echo $oneData->categoryID;?>">


    <br><br>
    <input type="submit" value="Update">
</form>



</body>
</html>


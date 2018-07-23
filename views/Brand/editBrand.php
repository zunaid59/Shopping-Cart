<?php
require_once("../../vendor/autoload.php");

use App\Message;

if(!isset($_SESSION)) session_start();

$msg = Message::getMessage();
echo "<div id='message'></div>";

$_SESSION['message'] ="";

$brand  = new \App\Brand();
$brand ->setData($_GET);
$oneData =$brand ->view();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brand Name Edit Form</title>
</head>
<body>
<form action="update.php" method="post">

     Category :
    <input type="text" name="brand_name" value="<?php echo $oneData->brandName;?>"><br><br>
    <input type="hidden" name="id" value="<?php echo $oneData->brandID;?>">


    <br><br>
    <input type="submit" value="Update">
</form>



</body>
</html>


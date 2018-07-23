<?php
require_once("../../vendor/autoload.php");

use App\Message;

if(!isset($_SESSION)) session_start();

$msg = Message::getMessage();
echo "<div id='message'></div>";

$_SESSION['message'] ="";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brand Create Form</title>
    <link rel="stylesheet" type="text/css" href="../../resource/css/bootstrap.min.css">

</head>
<body>
<form action="store.php" class="form-group" method="post">
    <div id="login" class="container" align="center">
        <h1>Please Enter</h1>

        Brand Name :
        <input id="username" name="brand_name"  type="text" class="form-control-static" >

        <input type="submit" value="submit" class="btn btn-success">
    </div>
</form>
<script src="../../resource/js/bootstrap.min.js"></script>
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


</body>
</html>
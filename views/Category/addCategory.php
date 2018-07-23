<?php
require_once("../../vendor/autoload.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category Form</title>
    <link rel="stylesheet" type="text/css" href="../../resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resource/css/style.css">

</head>
<body>
<div class="container-fluid main-content">
    <form action="store.php" class="form-group" method="post">
        <div id="login"  align="center">
            <h1>ADD Category</h1>

            Cateory Name :
            <input  type="text" name="category_name"  class="form-control input-sm" >


            <input type="submit" value="ADD" class="btn btn-info">
        </div>
    </form>
</div>

<script src="../../resource/js/jquery-3.3.1.min.js"></script>
<script src="../../resource/js/popper.min.js"></script>
<script src="../../resource/js/bootstrap.min.js"></script>

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
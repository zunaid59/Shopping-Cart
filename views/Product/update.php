<?php

require_once ("../../vendor/autoload.php");

$product = new App\Product();
/*

if(!empty($_FILES['image']['name'])){
    $filename = $_FILES['image']['tmp_name'];
    $located_folder = '../../resource/image/';

    $uploaded_file = time() . $_FILES['image']['name'];
    $destination = $located_folder . $uploaded_file;
    move_uploaded_file($filename, $destination);
    $_POST['image']=$uploaded_file;
}
else
    echo "img can't move";

*/
$product-> setData($_POST);
$product->update();

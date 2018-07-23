<?php

require_once ("../../vendor/autoload.php");


$product = new App\Product();

$file_name =  $_FILES['image']['name'];

$file_size = $_FILES['image']['size'];

$file_tmp = $_FILES['image']['tmp_name'];

$div = explode('.',$file_name);

$file_ext = strtolower(end($div));

$unique_image = substr(md5(time()),0,10).'.'.$file_ext;

$uploaded_image = '../../resource/image/'.$unique_image;

move_uploaded_file($file_tmp, $uploaded_image);
$_POST['image'] = $uploaded_image;
$product->setData($_POST);


$product->store();
/*

public function upload($image1,$image2)
{

    $filename = $image2;
    $path = $image1;
    $newpath = "../../resource/image/" . $filename;
    $img=move_uploaded_file($path, $newpath);
*/
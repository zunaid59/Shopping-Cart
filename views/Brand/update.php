<?php


require_once("../../vendor/autoload.php");

use App\Brand;

$brand = new Brand();

$brand->setData($_POST);

$brand->update();

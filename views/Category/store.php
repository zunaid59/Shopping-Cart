<?php



require_once("../../vendor/autoload.php");

use App\Category;

$category = new Category();

$category->setData($_POST);

$category->store();
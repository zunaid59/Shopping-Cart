<?php
require_once ("../../vendor/autoload.php");

use App\Category;

use App\Brand;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link rel="stylesheet" href="../../resource/css/bootstrap.min.css">
    <style>
        body{
            background-color: rgba(0, 0, 0, 0.04);
        }
        @media only screen and (min-width: 258px) {
            .container{width: 500px;}
        }
        @media only screen and (min-width: 258px) {
            .btn{
                width: 470px;
                height: 50px;
            }
        }


    </style>
</head>
<body>
<div class="container" align="center" id="body">
    <h3>Add Product Information</h3>
</div>
<div align="center" class="container">

    <form action="store.php" method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
        <tr>
            <td><label class="control-label"> Product Name:</label></td>
            <td> <input type="text" class="form-control" name="productName"></td>
        </tr>

        <tr>
            <td><label class="control-label">Category :</label></td>
            <td><select name="categoryID" class="form-control">
                    <?php
                    $category = new Category();
                    $allData=$category ->index();
                    foreach($allData as $singleData){

                        ?>
                        <option value="<?php echo $singleData->categoryID; ?>"><?php echo $singleData->categoryName;?></option>
                    <?php }?>
                </select>
            </td>
        </tr>

        <tr>
            <td><label class="control-label">Brand :</label> </td>
            <td>
                <select name="brandID" class="form-control">
                     <?php
                     $brand = new Brand();
                     $allData= $brand->index();
                     foreach($allData as $singleData){
                         ?>
                         <option value="<?php echo $singleData->brandID;?>"><?php echo $singleData->brandName;?></option>
                     <?php } ?>
                 </select>
             </td>
        </tr>
        <tr>
            <td><label class="control-label">Description:</label></td>
            <td>
                <textarea name="description" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td><label class="control-label">Price:</label></td>
            <td>
                <input type="text" id="price" name="price" class="form-control">
            </td>
        </tr>
        <tr>
            <td><label class="control-label">Upload Image :</label> </td>
            <td>
                <input class="input-group" type="file"  value="Upload Image" id="image" name="image" >
            </td>
        </tr>
        <tr>
            <td><label class="control-label">Product Type :</label></td>
            <td>
                <select class="form-control" name="productType">
                    <option value="0">Featured</option>
                    <option value="1">General</option>
                </select>
            </td>

        </tr>


    </table>

</div>
<div class="container">
    <input type="submit" value="Enter" name="submit" class="btn btn-success">
</div>

</form>
<script src="../../resource/js/bootstrap.min.js"></script>
</body>
</html>
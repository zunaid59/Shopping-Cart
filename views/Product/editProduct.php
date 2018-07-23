<?php
require_once ("../../vendor/autoload.php");

use App\Category;

use App\Brand;

$product = new App\Product();

$product->setData($_GET);



$allData=$product->view();

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
    <h3>Edit Product Information</h3>
</div>
<div align="center" class="container">

    <form action="update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
    <table class="table table-bordered table-responsive">
        <tr>
            <td><label class="control-label"> Product Name:</label></td>
            <td> <input type="text" class="form-control" name="productName" value="<?php echo $allData->productName;?>">
            </td>
        </tr>
        <tr>
            <input type="hidden" name="productID" value="<?php echo $allData->productID?>">
        </tr>

        <tr>
            <td><label class="control-label">Category :</label></td>
            <td><select name="categoryID" class="form-control">
                    <?php
                    $category = new Category();
                    $getCategory =  $category ->index();
                    foreach($getCategory as $singleData){
                        ?>

                        <option <?php
                             if($allData->categoryID == $singleData->categoryID){
                        ?>
                              selected = 'selected'
                        <?php } ?>    value="<?php echo $singleData->categoryID; ?>"><?php echo $singleData->categoryName;?></option>
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
                    $getBrand= $brand->index();
                    foreach($getBrand as $singleData){
                        ?>
                        <option
                        <?php
                             if($allData->brandID == $singleData->brandID){
                        ?>
                            selected = "selected"
                            <?php } ?>
                            value="<?php echo $singleData->brandID;?>"><?php echo $singleData->brandName;?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label class="control-label">Description:</label></td>
            <td>
                <textarea name="description" class="form-control"><?php echo $allData->description?></textarea>
            </td>
        </tr>
        <tr>
            <td><label class="control-label">Price:</label></td>
            <td>
                <input type="text" id="price" name="price" class="form-control" value="<?php echo $allData->price?>">
            </td>
        </tr>
        <tr>
            <td><label class="control-label">Upload Image :</label> </td>
            <td>
                <img src="<?php echo $allData->image ?>" height="100" width="120" alt=""><br><br>
                <input class="input-group" type="file"  value="Upload Image" id="image" name="image" >
            </td>
        </tr>
        <tr>
            <td><label class="control-label">Product Type :</label></td>
            <td>
                <select class="form-control" name="productType">
                    <option>Select</option>
                    <?php
                         if($allData->type ==0){
                    ?>
                    <option selected="selected" value="0">Featured</option>
                    <option value="1">General</option>
                    <?php } else{ ?>
                    <option selected="selected" value="1">General</option>
                    <?php } ?>
                </select>
            </td>

        </tr>
        <input type="hidden" name="id" value="<?php echo $allData->productID; ?>">



    </table>

</div>
<div class="container">
    <input type="submit" value="Update" class="btn btn-success">
</div>

</form>
<?php}?>
<script src="../../resource/js/bootstrap.min.js"></script>
</body>
</html>
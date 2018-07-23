<?php
session_start();
  require_once ("vendor/autoload.php");

$product = new App\Product();
$product->setData($_GET);
$allData =$product->getSingleProduct();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    table {
    border-collapse: separate;
    border-spacing: 0;
    }
    </style>

</head>
<body>
<?php include_once("navbar.php");?>
<div class="container" style="height: 500px">


        <div class="col-md-4 col-sm-4">
            <?php
                foreach($allData as $oneData){
            ?>
        <img src="resource/image/<?php echo $oneData->image;?>" class="img-responsive" height="200" width="150" alt="">

        <h3><?php echo $oneData->productName; ?></h3>
        <label for="category">Category : <?php echo $oneData->categoryName; ?></label><br><br>
        <label for="brand">Brand : <?php echo $oneData->brandName; ?></label><br><br>
        <label for="brand">Price : <?php echo $oneData->price; ?> Tk.</label><br><br>
            <form action="cart.php" method="post">
                <label for="">Quantity :
                    <input type="number" min="1" max="10" value="1" step="1" name="quantity" style="width: 80px; text-align: center">
                </label><br>
            </form>
            <a href="cart.php?id=<?php echo $oneData->productID; ?>" class="btn btn-success pull-right" >ADD TO CART</a>
            <input type="hidden" name="id" value="<?php echo $oneData->productID; ?>">
    </div>
        <?php  } ?>
    </div>
</div>


<?php
     include_once("footer.php");

?>







<script src="resource/js/jquery-3.3.1.min.js"></script>
<script src="resource/js/bootstrap.min.js"></script>
</body>
</html>
<?php
require_once ("vendor/autoload.php");
session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/css/style.css">
    <link rel="stylesheet" href="resource/css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-------------------  Navbar                   ----------->


<?php include_once("navbar.php");?>

<!----- End Navbar---->

<!----           Body Content          --------->
<div class="container">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4>Featured Product</h4>
            </div>
            <?php
            $product = new App\Product();
            $allData = $product->getfeaturedProduct();
            ?>
            <div class="panel-body">
                <div class="row">
                    <?php
                    foreach($allData as $oneData){
                    ?>
                    <div class="col-md-6 col-md-3">
                        <div class="thumbnail">
                            <img src="resource/image/<?php echo $oneData->image;?>" style="height: 100px;width: 80px;" alt="" class="img-responsive">
                            <div class="caption">
                                <h4><?php echo $oneData->productName;?></h4>
                                <p><?php echo $oneData->description;?>
                                    <a href="details.php?id=<?php echo $oneData->productID; ?>">Details</a>
                                </p>
                                <p><strong><?php echo $oneData->price; ?> Tk.</strong></p>
                                <p align="center"><a href="details.php?id=<?php echo $oneData->productID; ?>" class="btn btn-success btn-block" role="button">Buy
                                        <span class="glyphicon glyphicon-shopping-cart"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php  }   ?>
                </div>
            </div>
        </div>
</div>

<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4>General Product</h4>
        </div>
        <?php
        $product = new App\Product();
        $allData = $product->getgeneralProduct();
        ?>
        <div class="panel-body">
            <div class="row">
                <?php
                foreach($allData as $oneData){
                    ?>
                    <div class="col-md-6 col-md-3">
                        <div class="thumbnail">
                            <img src="resource/image/<?php echo $oneData->image;?>" style="height: 100px;width: 80px;" alt="" class="img-responsive">
                            <div class="caption">
                                <h4><?php echo $oneData->productName;?></h4>
                                <p><?php echo $oneData->description;?>
                                    <a href="details.php?id=<?php echo $oneData->productID; ?>">Details</a>
                                </p>
                                <p><strong><?php echo $oneData->price; ?> Tk.</strong></p>
                                <p align="center"><a href="details.php?id=<?php echo $oneData->productID; ?>" class="btn btn-success btn-block" role="button">Buy
                                        <span class="glyphicon glyphicon-shopping-cart"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php  }   ?>
            </div>
        </div>
    </div>
</div>



<!----                 Footer              ------>

<?php include_once ("footer.php");?>
<!-------------       End Footer  ------------->
<script src="resource/js/jquery-3.3.1.min.js"></script>
<script src="resource/js/bootstrap.min.js"></script>
</body>
</html>

<?php

require_once ("vendor/autoload.php");
use App\Cart;


$cart = new Cart();
$cart->setData($_POST);

echo session_id();


if(!isset($_GET['id']) || $_GET['id']==NULL ){
    echo "error";
}
else {
    $productID = $_GET['id'];
    $cart->addToCart($productID);
}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table align="center">
    <tr>  <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Amount</th>
    </tr>
    <tr>
        <td></td>
    </tr>

</table>

</body>
</html>
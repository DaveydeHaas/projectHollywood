

<?php 

include("./scripts/connectdb.php");
$ordernumber = rand(0,100000);


foreach ($_SESSION['shopping_cart'] as $key => $product){

    $quantity = $product['quantity'];
    $product_id = $product['product_id'];

}

foreach ($_SESSION['shopping_cart'] as $key => $product){

$sql = "INSERT INTO `order`(`quantity`, `product`, `order`)
values('{$quantity}','{$product_id}','{$ordernumber}'";

    mysqli_query($conn, $sql);
}








?>


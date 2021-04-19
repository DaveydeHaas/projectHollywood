

<?php 

include("./scripts/connectdb.php");
$ordernumber = rand(0,100000);


foreach ($_SESSION['shopping_cart'] as $key => $product){

    $quantity = $product['quantity'];
    $product_id = $product['product_id'];

}

foreach ($_SESSION['shopping_cart'] as $key => $product){

$sql = "INSERT INTO `order`(`quantity`, `product`, `ordernumber`)
values('{$quantity}','{$product_id}','{$ordernumber}')";

}

   if(mysqli_query($conn, $sql)) {
    echo "Betaaling sucsevol";
    $_SESSION['shopping_cart'] = array();
    header("refresh: 5; ../index.php?content=home");
   }
   else{
    echo "betaaling gefaalt";
    header("refresh: 5; ../index.php?content=home");
   }







?>


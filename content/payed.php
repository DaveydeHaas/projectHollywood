

<?php 

include("./scripts/db_connect.php");
$ordernumber = rand(0,100000);


$name = $_POST["name"];
$lastname = $_POST["lastname"];
$address = $_POST["address"];
$address2 = $_POST["adress2"];
$cardname = $_POST["cardname"];
$city = $_POST["city"];
$zip = $_POST["zip"];
$date = $_POST["date"];
$cardnr = $_POST["cardnr"];
$cvc = $_POST["cvc"];

$query = "INSERT INTO `customer_2`(
`name`,`lastname`,`address`,`address_2`,`card_name`,`city`,`zip`,`date`,`cardnr`,`cvc`,`ordernumber`)
VALUES ('$name','$lastname','$address','$address2','$cardname','$city','$zip','$date','$cardnr','$cvc', '$ordernumber');";

mysqli_query($conn,$query); 


foreach ($_SESSION['shopping_cart'] as $key => $product){
    $quantity = $product['quantity'];
    $product_id = $product['product_id'];
    echo $product_id; 
    echo '<br>';

$sql = "INSERT INTO `order`(`quantity`, `product`, `ordernumber`)
values('{$quantity}','{$product_id}','{$ordernumber}')";

if(mysqli_query($conn, $sql)) {
     echo "Betaaling sucsevol";
   $_SESSION['shopping_cart'] = array();
    header("refresh: 5; ../index.php?content=home");
  }
  else{
   echo "betaaling gefaalt";
   header("refresh: 5; ../index.php?content=home");
  }

}

  






?>


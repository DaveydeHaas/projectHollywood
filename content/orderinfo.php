<link rel="stylesheet" href="./css/order.css">
<?php   
 
   include("./scripts/db_connect.php");
   $query = 'SELECT * FROM menu';

   $result = mysqli_query($conn, $query);
?>
<div class="container-fluid">
  <div class="row">
  <div class="col-1"></div>
    
    <div class="menu paper col-6">
    <form class="row g-3" action="./index.php?content=payed" method="POST">
  <div class="col-md-6 space">
    <label for="inputEmail4" class="form-label">name</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="col-md-6 space">
    <label for="inputPassword4" class="form-label">lastname</label>
    <input type="text" class="form-control" name="lastname" required>
  </div>
  <div class="col-12 space">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
  </div> 
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="adress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-12 space">
    <label for="inputAddress" class="form-label">card holder name</label>
    <input type="text" class="form-control" id="inputAddress" name="cardname" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" required>
  </div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="zip" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">exp date</label>
    <input type="text" class="form-control" id="inputCity" name="date" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">card number</label>
    <input type="number" class="form-control" id="inputCity" name="cardnr" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">cvc</label>
    <input type="text" class="form-control" id="inputCity" name="cvc" >
  </div>



    </div>
    <div class="col-2"></div>
    <div class=" col-3 totaal">
     
<?php 
if (!empty($_SESSION['shopping_cart'])):
  $total = 0;

  foreach($_SESSION['shopping_cart'] as $key => $product):
?>
<br>
  <?php echo $product['name'];?> <br> Price
  <?php echo $product['price'];?> | Total
  <?php echo number_format($product['quantity'] * $product['price'], 2, ',', '.');?> <br> Quantity
  <?php echo $product['quantity'];?>  <hr>
  </a>
  

     <?php
     $total = $total + ($product['quantity'] * $product['price']);
  endforeach;
  echo"totaal | "; 
  echo  number_format($total, 2, ',', '.'); echo"<br>";

  
  endif
?>
      <button type="submit" class="standard-button order-button ">betaal</button>
      
    </div></form>
  </div>
</div>
</div>
</div>
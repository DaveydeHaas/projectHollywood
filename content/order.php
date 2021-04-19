<?php

$product_ids = array();


if (filter_input(INPUT_POST, 'ADD')) {
  if (isset($_SESSION['shopping_cart'])) {
    $count = count($_SESSION['shopping_cart']);

    $product_ids = array_column($_SESSION['shopping_cart'], 'product_id');

    if (!in_array(filter_input(INPUT_POST, 'product_id'), $product_ids)) {
      $_SESSION['shopping_cart'][$count] = array(
        'product_id' => filter_input(INPUT_POST, 'product_id'),
        'name' => filter_input(INPUT_POST, 'name'),
        'price' => filter_input(INPUT_POST, 'price'),
        'quantity' => filter_input(INPUT_POST, 'quantity')
      );
    } else {
      for ($i = 0; $i < count($product_ids); $i++) {
        if ($product_ids[$i] == filter_input(INPUT_POST, 'product_id')) {
          $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
        }
      }
    }
  } else {
    $_SESSION['shopping_cart'][0] = array(
      'product_id' => filter_input(INPUT_POST, 'product_id'),
      'name' => filter_input(INPUT_POST, 'name'),
      'price' => filter_input(INPUT_POST, 'price'),
      'quantity' => filter_input(INPUT_POST, 'quantity')
    );
  }
}

if (filter_input(INPUT_GET, 'action') == 'delete') {
  foreach ($_SESSION['shopping_cart'] as $key => $product) {
    if ($product['product_id'] == filter_input(INPUT_GET, 'id')) {
      unset($_SESSION['shopping_cart'][$key]);
    }
  }
  $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}


?>

<link rel="stylesheet" href="../css/order.css">
<link rel="stylesheet" href="../css/style.css">
<?php

include("./scripts/connectdb.php");
$query = 'SELECT distinct product_id, title, price, catagory_name , description  FROM `product` ,`category` group by title ';

$result = mysqli_query($conn, $query);
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-1"></div>
    <div class="filter paper col-1 ">
      <div class="dropdown drop">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          filter
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
      <div class="dropdown drop">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          filter
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
      <div class="dropdown drop">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          filter
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
      <div class="dropdown drop">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          filter
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
    </div>
    <div class="menu paper col-5">
      <?php
      if ($result) {
        if (mysqli_num_rows($result)) {
          while ($product = mysqli_fetch_assoc($result)) {
      ?>

            <form action="./index.php?content=order&add&action=add&id=<?php echo $product['product_id'] ?>" method="POST">
              <div class="card paper">
                <div class="card-header">
                  <?php echo $product['title'] ?>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>
                      <?php echo $product['description'] ?>
                    </p>
                    <footer class="blockquote-footer">
                      <?php echo $product['price'] ?>
                      <?php echo $product['catagory_name'] ?>
                      <input type="hidden" name="quantity" class="form-control" value="1">
                      <input type="hidden" name="name" value="<?php echo $product['title'] ?>">
                      <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
                      <input type="hidden" name="product_id" value="<?php echo $product['product_id'] ?>">
                    </footer>
                  </blockquote>
                </div> <input type="submit" class="ADD standard-button order-button" name="ADD" value="add">
              </div>
            </form>
      <?php
          }
        }
      }
      ?>

    </div>
    <div class="col-2"></div>
    <div class="totaal col-3">
      <?php
      if (!empty($_SESSION['shopping_cart'])) :
        $total = 0;

        foreach ($_SESSION['shopping_cart'] as $key => $product) :
      ?>
          <br>
          <?php echo $product['name']; ?> <br> Price
          <?php echo $product['price']; ?> | Total
          <?php echo number_format($product['quantity'] * $product['price'], 2, ',', '.'); ?> <br> Quantity
          <?php echo $product['quantity']; ?>
          <hr><a href="index.php?content=order&action=delete&id=<?php echo $product['product_id']; ?>">
            <div class="btn-danger">remove</div>
          </a>


      <?php
          $total = $total + ($product['quantity'] * $product['price']);
        endforeach;
        echo "totaal | ";
        echo  number_format($total, 2, ',', '.');
        echo "<br>";


      endif
      ?>
      <a href="./index.php?content=orderinfo"><button type="button" class="standard-button order-button">betaal</button></a>
    </div>
  </div>
</div>
<link rel="stylesheet" href="./css/order.css">
<?php   
 
   include("./scripts/connectdb.php");
   $query = 'SELECT * FROM menu';

   $result = mysqli_query($conn, $query);
?>
<div class="container-fluid">
  <div class="row">
  <div class="col-1"></div>
    
    <div class="menu paper col-6">
      <?php
      if ($result) {
        if (mysqli_num_rows($result)) {
          while ($product = mysqli_fetch_assoc($result)) {
      ?>
            <div class="card paper">
              <div class="card-header">
                <?php echo $product['Item'] ?>
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>
                    <?php echo $product['omschijving'] ?>
                  </p>
                  <footer class="blockquote-footer">
                    <?php echo $product['prijs'] ?>
                  </footer>
                </blockquote>
              </div>  <button class="ADD">test</button>
            </div>
          
      <?php
          }
        }
      }
      ?>

    </div>
    <div class="col-2"></div>
    <div class="totaal col-3">
    items
    list@
    <hr>totaal <br>
     <a href="./index.php?content=orderinfo" class=""><button>betaal</button></div></a>
  </div>
</div>
<?php   
   include("connectdb.php");
   $query = 'SELECT * FROM menu';

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
    <button>betaal</button></div>
  </div>
</div>
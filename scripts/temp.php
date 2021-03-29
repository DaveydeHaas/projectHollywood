
<div class="box col-6">
  <div class="row">
    <div class="filter col-4">
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
    <div class="menu col-4">
      <?php

      include("connectdb.php");
      $query = 'SELECT * FROM menu';

      $result = mysqli_query($conn, $query);

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
              </div>
            </div>
      <?php
          }
        }
      }
      ?>
     
    </div>   <div class="totaal col-4"> test</div>
  </div>
</div>


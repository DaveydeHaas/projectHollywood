<?php
include_once("./scripts/db_connect.php");
$sql = "SELECT id, adrestitle, adresdesc, contacttitle, contacttel, contactemail, contactinstagram, openingstijdentitle, openingtijdendesc1, openingtijdendesc2, parkerentitle, parkerendesc, news1title, news1desc, news2title, news2desc, news3title, news3desc, news4title, news4desc, news5title, news5desc, news6title, news6desc FROM information";
$resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
while ($record = mysqli_fetch_assoc($resultset)) {
?>

<link rel="stylesheet" href="./css/info.css">

<!-- Container -->
<div class="container-fluid">
  <br>
  <!-- Section 1 -->
  <div class="row">
    <!-- Card; Adres -->
    <div class="col-2">
      <div class="card card-corner" style="height: 16rem;">
        <div class="card-body text-center">
          <h6 class="card-title"><i class="fas fa-map-marker"></i><?php echo $record['adrestitle']; ?></h6>
          <hr class="royalblue">
          <p class="card-text"><?php echo $record['adresdesc']; ?></p>
        </div>
      </div>
    </div>
    <!-- Card; Adres -->
    <!-- Card; Contact -->
    <div class="col-2">
      <div class="card card-corner" style="height: 16rem;">
        <div class="card-body text-center">
          <h6 class="card-title"><i class="fas fa-address-book"></i> <?php echo $record['contacttitle']; ?></h6>
          <hr class="royalblue">
          <p class="card-text">Tel: <?php echo $record['contacttel']; ?> <br> Email: <?php echo $record['contactemail']; ?><br>Instagram: <?php echo $record['contactinstagram']; ?></p>
        </div>
      </div>
    </div>
    <!-- Card; Contact -->
    <!-- Card; Opening Tijden -->
    <div class="col-2">
      <div class="card card-corner" style="height: 16rem;">
        <div class="card-body text-center">
          <h6 class="card-title"><i class="far fa-calendar-alt"></i> <?php echo $record['openingstijdentitle']; ?></h6>
          <hr class="royalblue">
          <p class="card-text"><?php echo $record['openingtijdendesc1']; ?><br><?php echo $record['openingtijdendesc2']; ?></p>
        </div>
      </div>
    </div>
    <!-- Card; Openingstijden -->
    <!-- google maps -->
    <div class="col-6">
      <div class="card card-corner" style="height: 16rem;">
        <div class="card-body text-center">
          <h6 class="card-title"><i class="fas fa-map-marked-alt"></i> Google Maps</h6>
          <hr class="royalblue">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.8239853640894!2d4.933875915800673!3d52.337339179779995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60bdc0973e95b%3A0xc82ad62cab0c8354!2sDuivendrechtsekade%2085%2C%201096%20AJ%20Amsterdam!5e0!3m2!1snl!2snl!4v1617635664054!5m2!1snl!2snl" class="col-12" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
    <!-- google maps -->
  </div>
  <!-- Section 1 -->
  <hr class="royalblue2">
  <!-- Section 2 -->

  <div class="row">
    <!-- Card; Opening Tijden -->
    <div class="col-6">
      <div class="card card-corner" style="height: 16rem;">
        <img class="card-img-top" src="./images/parkeerimg" alt="Card image cap">
      </div>
    </div>
    <!-- Card; Opening Tijden -->
    <!-- Card; Opening Tijden -->
    <div class="col-6">
      <div class="card card-corner" style="height: 16rem;">
        <div class="card-body text-center">
          <h6 class="card-title"><i class="far fa-calendar-alt"></i> <?php echo $record['parkerentitle']; ?></h6>
          <hr class="royalblue">
          <p class="card-text"><?php echo $record['parkerendesc']; ?></p>
        </div>
      </div>
    </div>
    <!-- Card; Opening Tijden -->
  </div>

  <!-- Section 2 -->
  <hr class="royalblue2">
  <!-- Section 3 -->
  <div class="row">
    <!-- Carousel Section -->
    <div id="carouselExampleControls" class="carousel slide col-12" data-ride="carousel" data-interval="6000">
      <div class="carousel-inner">
        <!-- Carousel #1 -->
        <div class="carousel-item active">
          <div class="row">
            <div class="col-1"></div>
            <!-- Card #1 -->
            <div class="card card-corner col-5" style="height: 16rem;">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $record['news1title']; ?></h5>
                <hr class="royalblue">
                <p class="card-text"><?php echo $record['news1desc']; ?></p>
              </div>
            </div>
            <!-- Card #1 -->
            <!-- Card #2 -->
            <div class="card card-corner col-5" style="height: 16rem;">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $record['news2title']; ?></h5>
                <hr class="royalblue">
                <p class="card-text"><?php echo $record['news2desc']; ?></p>
              </div>
            </div>
            <!-- Card #2 -->
            <div class="col-1"></div>
          </div>
        </div>
        <!-- Carousel #1 -->

        <!-- Carousel #2 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-1"></div>
            <!-- Card #1 -->
            <div class="card card-corner col-5" style="height: 16rem;">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $record['news3title']; ?></h5>
                <hr class="royalblue">
                <p class="card-text"><?php echo $record['news3desc']; ?></p>
              </div>
            </div>
            <!-- Card #1 -->
            <!-- Card #2 -->
            <div class="card card-corner col-5" style="height: 16rem;">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $record['news4title']; ?></h5>
                <hr class="royalblue">
                <p class="card-text"><?php echo $record['news4desc']; ?></p>
              </div>
            </div>
            <!-- Card #2 -->
            <div class="col-1"></div>
          </div>
        </div>
        <!-- Carousel #2 -->

        <!-- Carousel #3 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-1"></div>
            <!-- Card #1 -->
            <div class="card card-corner col-5" style="height: 16rem;">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $record['news5title']; ?></h5>
                <hr class="royalblue">
                <p class="card-text"><?php echo $record['news5desc']; ?></p>
              </div>
            </div>
            <!-- Card #1 -->
            <!-- Card #2 -->
            <div class="card card-corner col-5" style="height: 16rem;">
              <div class="card-body text-center">
                <h5 class="card-title"><?php echo $record['news6title']; ?></h5>
                <hr class="royalblue">
                <p class="card-text"><?php echo $record['news6desc']; ?></p>
              </div>
            </div>
            <!-- Card #2 -->
            <div class="col-1"></div>
          </div>
        </div>
        <!-- Carousel #3 -->
      </div>
      <br>
    </div>
    <!-- Carousel Buttons -->
    <div class="col-5"></div>
    <div class="col-2 card card-background-color carousel-button">
      <div class="card-body text-center">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="col-5"></div>
    </div>
    <!-- Carousel Buttons -->
    <!-- Carousel Section -->
  </div>
  <br>
  <!-- Section 3 -->
</div>
<!-- Container -->

<?php } ?>
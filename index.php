<?php
ob_start();
session_start();
session_gc();


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- favicon -->
  <link rel="shortcut icon" href="favicon.ico"/>

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Eigen stylesheet -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Tabblad Naam -->
  <title>Restaurant Hollywood</title>
</head>

<body class="font">
  <!-- includes de navbar -->
  <?php include("./main/navbar.php"); ?>
  <!-- includes de header -->
  <?php include("./main/header.php"); ?>


  <?php
  if (isset($_GET["content"])) {
    include("./content/" . $_GET["content"] . ".php");
  }
  elseif (isset($_GET['scripts'])){
    include("./scripts/" . $_GET["scripts"] . ".php");  
  }
  else {
    include("./content/home.php");
  }
  ?>

  <!-- includes de footer -->
  <?php include("./main/footer.php"); ?>

  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-a11y="true"></script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>
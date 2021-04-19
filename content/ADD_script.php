<?php 
include("./scripts/connectdb.php");



mysqli_query($conn, $up);

header("Location: ./index.php?content=order");
?>
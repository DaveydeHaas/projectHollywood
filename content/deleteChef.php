<?php 
include("./scripts/db_connect.php");

$id = $_GET['id'];


$sql = "DELETE FROM `chef` WHERE `chef`.`id` = $id";

mysqli_query($conn, $sql);



header("refresh: 5; ../index.php?content=chefHome");
?>
order is done
<?php 
include("./scripts/db_connect.php");

$id = $_GET['id'];


$sql = "DELETE FROM `ober` WHERE `ober`.`id` = $id";

mysqli_query($conn, $sql);



header("refresh: 5; ../index.php?content=ober");
?>
order is done
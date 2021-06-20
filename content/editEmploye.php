<?php
$admin = 'admin';
$manager = 'manager';
$userId = $_GET['id'];

if(isset($_SESSION['id']))
{
    if($_SESSION['job'] == $manager or $_SESSION['job'] == $admin){
        if (isset($_GET['id'])) {
          require_once("./scripts/db_connect.php");
          $sql = "SELECT * FROM employe WHERE id=$userId";
        }else {
          
        }
    }
}else{
    header("Location: ./index.php?content=message&alert=no-permission");
}


?>

$sql = "UPDATE `employe` SET `firstname` = 'TestOber' WHERE `employe`.`id` = $userId;";
<?php
$admin = 'admin';
$manager = 'manager';
$userId = $_GET['id'];

if(isset($_SESSION['id']))
{
    if($_SESSION['job'] == $manager or $_SESSION['job'] == $admin){
        if (isset($_GET['id'])) {
          require_once("./scripts/db_connect.php");
          $sql = "DELETE from employe where id=$userId";
          mysqli_query($conn, $sql);
          header("Location: ./index.php?content=message&alert=Record-delete-success");
        }else {
          header("Location: ./index.php?content=message&alert=Employe-delete-fail");
        }
    }
}else{
    header("Location: ./index.php?content=message&alert=no-permission");
}


?>

$result = mysqli_query($conn, $sql);
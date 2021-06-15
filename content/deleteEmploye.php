<?php
$admin = 'admin';
$manager = 'manager';
$userId = $_POST['id'];

if(isset($_SESSION['id']))
{
    if($_SESSION['userrole'] == $manager or $_SESSION['userrole'] == $admin){
        $sql = "DELETE from employe where id=$userId";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
          } else {
            echo "Error deleting record: " . $conn->error;
          }
    }
}else{
    header("Location: ./index.php?content=message&alert=no-permission");
}


?>


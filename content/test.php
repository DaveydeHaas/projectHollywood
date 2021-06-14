<?php
include_once("./scripts/db_connect.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $query = "UPDATE `information` SET 
    adresdesc='$_POST[adresdesc]',
    contacttel='$_POST[contacttel]',
    contactemail='$_POST[contactemail]',
    contactinstagram='$_POST[contactinstagram]',
    openingtijdendesc1='$_POST[openingtijdendesc1]',
    openingtijdendesc2='$_POST[openingtijdendesc2]',
    parkerendesc='$_POST[parkerendesc]',
    news1desc='$_POST[news1desc]',
    news2desc='$_POST[news2desc]',
    news3desc='$_POST[news3desc]',
    news4desc='$_POST[news4desc]',
    news5desc='$_POST[news5desc]',
    news6desc='$_POST[news6desc]' where id='$_POST[id]'";
    
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>
<?php

//haalt producten uit de datbase gebaseerd op categoryId
function getData1(){
    include("connectdb.php");
    $foodzone = $_POST['lunch/diner'];
    $sql = "SELECT dinnerType,time FROM timeslot where dinnerType = $foodzone";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}

?>
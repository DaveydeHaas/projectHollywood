<?php

//haalt producten uit de datbase gebaseerd op categoryId
function getData1(){
    include("./scripts/db_connect.php");
    $foodzone = $_POST['lunch/diner'];
    $sql = "SELECT dinnerType,time FROM timeslot where dinnerType = $foodzone";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}


function getDataEmploye(){
    require_once("./scripts/db_connect.php");
    $sql = "SELECT `firstname`,`lastname`,`username`,`job`,`tel`,`mail` from employe WHERE `job` NOT IN ('admin') order by `job`";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}

?>
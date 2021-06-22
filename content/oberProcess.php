<?php 

include_once("./scripts/db_connect.php");

if(isset($_POST['save']))  {
    $tafelnr = $_POST['tafelnr'];
    $tafelstatus = $_POST['tafelstatus'];
    $bestellingstatus = $_POST['bestellingstatus'];
    $bestelling = $_POST['bestelling'];

    $mysqli->query("INSERT INTO obertable (tafelnr, tafelstatus, bestellingstatus, bestelling) VALUES('$tafelnr', '$tafelstatus', '$bestellingstatus', '$bestelling')") or die($mysqli->error);
}

?>
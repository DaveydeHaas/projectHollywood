<?php
$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

// messages
switch($alert){
    case "no-firstname" :
        echo '
        <div class="alert alert-warning" role="alert">
        <br>
        <h1>Alert</h1>
        <hr>
        <p> Er is nog geen voornaam ingevuld. U wordt teruggestuurd.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=reservering1");
    break;


    case "no-lastname":
        echo '
        <div class="alert alert-warning" role="alert">
        <br>
        <h1>Alert</h1>
        <hr>
        <p>Er is nog geen achternaam ingevuld.<hr> U wordt teruggestuurd.</p>
        <br>
        </div>'; 

        header("Refresh: 3; ./index.php?content=reservering1");
    break;

    case "no-email":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>Alert</h1>
        <hr>
        <p>Er is nog geen E-mail ingevuld.<hr>U wordt teruggestuurd.</p>
        <br>
        </div>'; 

        header("Refresh: 3; ./index.php?content=reservering1");
    break;

    case "no-tel":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>Alert</h1>
        <hr>
        <p>U heeft uw telefoonnummer nog niet ingevuld.<hr> U wordt teruggestuurd.</p>
        <br>
        </div>'; 

        header("Refresh: 3; ./index.php?content=reservering1");
    break;


    default:
    header("Location: ./index.php?content=home");
    break;

    
}
?>
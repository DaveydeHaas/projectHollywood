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

    case "username-password-false":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>Alert</h1>
        <hr>
        <p>Uw gebruikersnaam en of wachtwoord klopt niet.</p>
        <br>
        </div>'; 

        header("Refresh: 3; ./index.php?content=login");
    break;

    case "no-permission":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>Alert</h1>
        <hr>
        <p>U heeft geen rechten tot deze pagina.</p>
        <br>
        </div>'; 

        header("Refresh: 3; ./index.php?content=home");
    break;






    case "no-pass":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-pass</h1>
        <hr>
        <p>U heeft geen password ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registration");
    break;

    case "no-cpass":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-cpass</h1>
        <hr>
        <p>U heeft geen verify password ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registration");
    break;

    case "email-exists":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>email-exists</h1>
        <hr>
        <p>Het ingevoerde email adress bestaat al probeer een ander email adress.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registration");
    break;

    case "username-exists":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>username-exists</h1>
        <hr>
        <p>De ingevoerde username bestaat al probeer een andere username.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registration");
    break;

    case "register-complete":
        echo '
        <div class="alert alert-success" role="alert">
        <br>
        <h1>register-complete</h1>
        <hr>
        <p>U bent succesvol geregistreerd op de webstie Game Center</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=home");
    break;

    case "register-error":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>register-error</h1>
        <hr>
        <p>Er is iets fout gegaan probeer dit later opnieuw. <br> Als deze fout zich voor blijft doen neem contact op met de server admin.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registration");
    break;

    case "password-no-match":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>no-pass-match</h1>
        <hr>
        <p>U wachtwoord en verify wachtwoord komen niet overeen.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registration");
    break;

    case "loginform-empty":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>login-form-empty</h1>
        <hr>
        <p>U heeft 1 van de beide velden niet ingevuld, probeer dit opnieuw </p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=home");
    break;

    case "username-password-false":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>username-password-false</h1>
        <hr>
        <p>Het door u ingevulde username en password combinatie komt niet met elkaar overeen. probeer het opnieuw.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=login");
    break;

    case "logout":
        echo '
        <div class="alert alert-success" role="alert">
        <br>
        <h1>logout</h1>
        <hr>
        <p>u bent uitgelogd en wordt doorverwezen naar de homepage.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php");
    break;

    case "auth-error":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>Authentication error</h1>
        <hr>
        <p>U heeft geen bevoegdheden voor deze pagina. U wordt doorgestuurd naar de homepage.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=home");
    break;

    case "Record-delete-success":
        echo '
        <div class="alert alert-success" role="alert">
        <br>
        <h1>Werknemer succesvol verwijderd</h1>
        <hr>
        <p>De gebruiker is succesvol verwijderd. U wordt doorgestuurd naar de homepage.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=home");
    break;


    case "Record-delete-fail":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>ERROR</h1>
        <hr>
        <p>OOPS, er is iets fout gegaan.</p>
        <p>Probeer dit later opnieuw. Als dit probleem zich vaker afspeeld neem contact op met de admin.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=home");
    break;




    default:
    header("Location: ./index.php?content=home");
    break;

    
}
?>

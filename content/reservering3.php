<?php
if(isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $foodzone = $_POST['lunch/diner'];
    $amount = $_POST['amount'];
    $coronaCheck = $_POST['coronaCheck'];
    }   else{
        header("Location: ./index.php?content=message&alert=no-firstname");
    }
?>

<?php require_once('./content/component.php'); ?>
<!-- Reserve stylesheet -->
<link rel="stylesheet" href="./css/reserve.css">
<link rel="stylesheet" href="./css/calendar.css">

<div class="container-fluid color">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-xl-5 col-sm-6 col-md-6 col-lx-6">
            <div class="card backgroundcolor2 reserve-card">
                <div class="corona-alert">
                    <?php coronaAlert(); ?>
                </div>
                <div class="">
                <form action="./index.php?content=reservering_script" method="POST">
                    <div class="form-contianer">
                        <div class="form-row">
                            <div class="form-group col-8">
                                <p>Datum</p>
                                    <?php 
                                    //Allereerst gaan we alle maanden defineren
$maanden     = array(1 => 'Januari', 2 => 'Februari', 3 => 'Maart', 4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Augustus', 9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'December');

//De dagen in een week
$weekdagen    = array('maandag','dinsdag','woensdag','donderdag','vrijdag','zaterdag','zondag');

//En de jaren die we willen toestaan, in dit geval van 2020, 2027.
$jaren         = range(2020,2027);

//Wat als er een maand in de url staat?
if(isset($_GET['maand']))
{
    //Eerst kijken we of die maand wel bestaat
    if(array_key_exists($_GET['maand'], $maanden))
    {
        $maand = $_GET['maand'];
    }else{
        $maand = date('n');
    }    
}else{
    $maand = date('n');
}

//Wat als er een jaar in de url staat?
if(isset($_GET['jaar']))
{
    //Eerst kijken we of we dat jaar wel goedkeuren
    if(in_array($_GET['jaar'],$jaren))
    {
        $jaar = htmlentities($_GET['jaar']);
    }else{
        $jaar = date('Y');
    }    
}else{
    $jaar = date('Y');
}

//Omdat we nu het jaar en de maand weten kunnen we vaststellen welke dagen zijn toegestaan
$dagen = range(1,date('t', mktime(0,0,0,$maand,1,$jaar)));

//Wat als er een dag in de url staat?
if(isset($_GET['dag']))
{
    //Bestaat deze dag wel?
    if(in_array($_GET['dag'], $dagen))
    {
        $dag = htmlentities($_GET['dag']);
    }else{
        $dag = 1;
    }    
}else{
    //Wat als er geen dag is geselecteerd? Dan kijken we of het vandaag dezelfde maand is als wat er is opgevraagd en selecteren we vandaag!
    if($maand == date('n'))
    {
        $dag = date('j');
    }else{
        $dag = 1;
    }
}

//Tijd voor een formuliertje!
//echo '<form action="./index.php?content=reserve" method="GET">';

//We maken een selectbox met daarin een foreach met alle maanden
echo '<select name="maand">';
foreach($maanden as $maandnummer => $maandnaam)
{
    if($maandnummer == $maand)
    {
        echo '<option  selected value="'.$maandnummer.'" required>'.$maandnaam.'</option>';
    }else{
        echo '<option  value="'.$maandnummer.'" required>'.$maandnaam.'</option>';
    }
}
echo '</select> ';

//Vervolgens maken we een selectbox voor alle jaren
echo '<select name="jaar">';
foreach($jaren as $jaarnummer)
{
    if($jaarnummer == $jaar)
    {
        echo '<option selected value="'.$jaarnummer.'" required>'.$jaarnummer.'</option>';
    }else{
        echo '<option value="'.$jaarnummer.'" required>'.$jaarnummer.'</option>';
    }
}
echo '</select>';
                                    ?>
                                <select name="dag" id="dag">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <hr>
                                <br>
                                <p>Tijd</p>
                                <select name="timeZone" id="timeZone" required>
                                    <?php 
                                    include('./scripts/functions.php');
                                    require_once('./scripts/db_content.php');
                                    var_dump($_POST);
                                        //$foodzone = sanitize($_POST['lunch/diner']);
                                        if(isset($_POST['lunch/diner'])){
                                            $foodzone = $_POST['lunch/diner'];
                                            $result = getData1();
                                            while($row = mysqli_fetch_assoc($result)){
                                                component($row['dinnerType'], $row['time']);
                                            }
                                        }


                                    ?>
                                </select>
                            </div>
                            


                            <input type="hidden" id="firstname" name="firstname" value="<?php echo $firstname; ?>">
                            <input type="hidden" id="lastname" name="lastname" value="<?php echo $lastname; ?>">
                            <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
                            <input type="hidden" id="tel" name="tel" value="<?php echo $tel; ?>">
                            <input type="hidden" id="amount" name="amount" value="<?php echo $amount; ?>">
                            <input type="hidden" id="lunch/diner" name="lunch/diner" value="<?php echo $foodzone; ?>">
                            <input type="hidden" id="coronaCheck" name="coronaCheck" value="<?php echo $coronaCheck; ?>">
                        </div>
                    <div class="row">
                        <div class="col-6"><a class="btn btn-primary" href="./index.php?content=reservering2">Vorige</a></div>
                        <div class="col-6"><button type="submit" class="btn btn-primary" value="submit">Volgende</button></div>
                    </div>
                        </div>
                </form>
                </div>
                <div></div>
            </div>
        </div>
        <div class="col-2">
        
        </div>
            <?php informationCard();?>
        </div>

</div>


<!-- <script src="./js/calendar.js"></script> -->
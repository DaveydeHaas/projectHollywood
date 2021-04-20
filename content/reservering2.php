<?php


if(isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
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
                <form action="./index.php?content=reservering3" method="POST">
                    <div class="form-contianer">
                        <div class="form-row">
                            <div class="form-group col-8">
                                <p class="kop">Lunch of Diner?</p>
                                <select name="lunch/diner" id="lunch/diner">
                                    <option name="lunch" value="Lunch">Lunch</option>
                                    <option name="diner" value="Diner">Diner</option>
                                </select>
                                <p class="kop">Hoeveel mensen?</p>
                                <select name="amount" id="amount">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                                <br>
                                <br>
                                <p>Met deze checkbox geef je aan dat je in de afgelopen 2 weken geen covid-19 klachten hebt gehad en niet in contact bent geweest met besmette personen.</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="coronaCheck" id="coronaCheck" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        
                                    </label>
                            </div>
                            </div>



                            <input type="hidden" id="firstname" name="firstname" value="<?php echo $firstname; ?>">
                            <input type="hidden" id="lastname" name="lastname" value="<?php echo $lastname; ?>">
                            <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
                            <input type="hidden" id="tel" name="tel" value="<?php echo $tel; ?>">
                        </div>
                    <div class="row">
                        <div class="col-6"><a class="btn btn-primary" href="./index.php?content=reservering1">Vorige</a></div>
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
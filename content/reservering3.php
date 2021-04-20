<?php
var_dump($_POST);
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
                                <p>Date</p>
                                <select name="date" id="date">
                                    <option value=""></option>
                                </select>
                                <p>Time</p>
                                <div name="timeZone" id="timeZone">
                                    <?php 
                                    include('./scripts/functions.php');
                                        //$foodzone = sanitize($_POST['lunch/diner']);
                                        if(isset($_GET['lunch/diner'])){
                                            $foodzone = 'lunch/diner';
                                            $result = getData1();
                                            while($row = mysqli_fetch_assoc($result)){
                                                component($row['dinnerType'], $row['time']);
                                                echo('error');
                                            }
                                        }


                                    ?>
                                </div>
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
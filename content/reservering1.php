<?php require_once('./content/component.php'); 
?>
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
                <form action="./index.php?content=reservering2" method="POST">
                    <div class="form-contianer">
                        <div class="form-row">
                            <div class="form-group col-8">
                                <label for="inputFirstname">Voornaam</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Voornaam" required autofocus >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-8">
                                <label for="inputLastname">Achternaam</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Achternaam" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-8">
                                <label for="inputEmail">E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-8">
                                <label for="inputTel">Telefoonnummer</label>
                                <input type="text" name="tel" class="form-control" id="Tel" placeholder="Tel" required>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6"><button type="submit" class="btn btn-primary" value="submit">Volgende</button></div></div>
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

<?php
var_dump($_SESSION);
?>
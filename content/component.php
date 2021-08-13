<?php

//card om een herhaling te verkomen informationCard()
function component($dinnerType,$time){
    $element= ' 
                    <option value=" ' . $dinnerType . '">' . $time . '</option>';

    echo $element;

}

//card om een corona alert zichtbaar te laten worden  coronaAlert()
function coronaAlert(){
    $element= ' 
                <div class="alert alert-warning" role="alert">
                    In verband met corona zijn het aantal plaatsen schaars.
                </div>';

    echo $element;

}

//card om een herhaling te verkomen informationCard()
function informationCard(){
    $element= ' 
                <div class="col-3 backgroundcolor2 reserve-card information">
                <h4>Openingstijden</h4>
                <p>Maandag-Zondag <br> vanaf <br> 00.00uur, tot 00.00uur</p>
                <h4>Lunch</h4>
                <p>11.00-14.00</p>
                <h4>Diner</h4>
                <p>18.00-21.00</p>
                <h4>Telefoonnummer</h4>
                <p>0342-000000</p>
                <h4>Mail</h4>
                <p>contact@restauranthollywood.nl</p>
                </div>';

    echo $element;

}


?>
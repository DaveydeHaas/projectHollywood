<?php
//card om een corona alert zichtbaar te laten worden  coronaAlert()
function coronaAlert(){
    $element= ' 
                <div class="alert alert-warning" role="alert">
                    In verband met corona zijn het aantal plaatsen schaars.
                </div>';

    echo $element;

}


?>
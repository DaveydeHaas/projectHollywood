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
                    <form action="" method="POST">
                        <select name="diner[]" double="double">
                        <option value="">Select diner type</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Diner">Diner</option>
                        </select></form>
                </div>
                <div></div>
                <div class="container calendar-container">
                    <div class=" text-color calendar">
                        <div class="month">
                            <i class="prev"><</i>
                            <div class="date">
                                <h1></h1>
                                <p></p>
                            </div>
                            <i class="next">></i>
                        </div>
                        <div class="weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="days">  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6"><button>Next</button></div>
                </div>
                <div id="demo"></div>
            </div>
        </div>
        <div class="col-2">
        
        </div>
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
        </div>
    </div>

</div>

<script src="./js/calendar.js"></script>
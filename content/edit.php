<link rel="stylesheet" href="./css/info.css">

<!-- Container -->
<div class="container-fluid">
    <br>
    <!-- Section 1 -->
    <div class="row">
        <!-- Card; Adres -->
        <div class="col-3"></div>

        <div class="col-6">
            <div class="card card-corner">
                <div class="card-body text-center">
                    <h6 class="card-title">Bewerk pagina</h6>
                    <hr class="royalblue">
                    <form action="./index.php?content=editlist" method="POST">
                        <div class="mb-3">
                            <label for="idtitle" class="form-label">ID</label>
                            <input type="text" name="id" placeholder="Vul hier in 1" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="adrestitle" class="form-label">Adres</label>
                            <input type="text" name="adresdesc" placeholder="Vul hier uw nieuwe adres text." class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="contacttitle" class="form-label">Contact</label>
                            <input type="text" name="contacttel" placeholder="Vul hier de telefoon nummer." class="form-control" />
                            <input type="text" name="contactemail" placeholder="Vul hier de emailadres." class="form-control" />
                            <input type="text" name="contactinstagram" placeholder="Vul hier de instagram tag." class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="openingstijdentitle" class="form-label">Openingstijden</label>
                            <input type="text" name="openingtijdendesc1" placeholder="Openingstijden lijn 1" class="form-control" />
                            <input type="text" name="openingtijdendesc2" placeholder="Openingstijden lijn 2" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="parkerentitle" class="form-label">Parkeren</label>
                            <input type="text" name="parkerendesc" placeholder="Vul hier in de parkeren informatie." class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="nieuwstitle" class="form-label">Nieuws</label>
                            <input type="text" name="news1desc" placeholder="Nieuws #1 vak." class="form-control" />
                            <input type="text" name="news2desc" placeholder="Nieuws #2 vak." class="form-control" />
                            <input type="text" name="news3desc" placeholder="Nieuws #3 vak." class="form-control" />
                            <input type="text" name="news4desc" placeholder="Nieuws #4 vak." class="form-control" />
                            <input type="text" name="news5desc" placeholder="Nieuws #5 vak." class="form-control" />
                            <input type="text" name="news6desc" placeholder="Nieuws #6 vak." class="form-control" />
                        </div>
                        <input type="submit" name="update" class="btn btn-primary" value="Bewerk" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3"></div>
    <br>
</div>
</div>
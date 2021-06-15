<!-- form registratie -->

<div class="container-fluid">
    <div class="row">

        <div class="col-4"></div>

        <div class="card col-4 registratie-margin-top registratie-margin-bottom registratie-color1 ">
            <div class="card-body">
                <div class="text-center">
                    <h1 class="card-title">Nieuwe werknemer</h1>
                    <h4 class="card-subtitle mb-2 text-muted">Maak een nieuw account aan</h4>
                </div>

                <form action="./index.php?content=registerEmploye" method="POST">
                    <div class="form-container">
                        <div class="form-row">

                            <div class="form-group col-12">
                                <i class="fa fa-user"></i>
                                <label for="inputusername">Gebruikersnaam</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" autofocus>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-envelope"></i>
                                <label for="inputusername">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputPassword4">Wachtwoord</label>
                                <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password">
                            </div>

                            <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputAddress">Herhaal Wachtwoord</label>
                                <input type="password" name="cpass" class="form-control" id="inputVerifyPassword" placeholder="Verify Password">
                                <br>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputAddress">Job</label>
                                <select name="job" id="cars">
                                    <option value="manager">Manager</option>
                                    <option value="chef">Chef</option>
                                    <option value="bartender">Barman/Barman</option>
                                    <option value="ober">Ober</option>
                                </select>
                                <br>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-lg btn-block" value="checkpassword">Maak Werknemer aan</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-4"></div>
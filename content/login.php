<?php



?>
<link rel="stylesheet" href="./css/forms.css">
<!-- form login -->

<div class="container-fluid">
    <div class="row">

        <div class="col-4"></div>

        <div class="card card2 col-4">

            <div class="card-body">
                <div class="text-center">
                    <h1 class="card-title">Werknemers Portaal</h1>
                    <h4 class="card-subtitle mb-2 text-muted">Login</h4>
                </div>

                <form action="./index.php?scripts=login_script" method="post">
                    <div class="form-container">
                        <div class="form-row">

                            <div class="form-group col-12">
                                <i class="fa fa-user"></i>
                                <label for="inputusername">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputPassword4">Password</label>
                                <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-row">
                        </div>

                        <button type="submit" class="btn btn-lg btn-block registratie-button" value="checkpassword">Log in</button>
                    </div>
                </form>
            </div>           
        </div>
        <div class="form-row">
        </div>
    </div>
</div>

<div class="col-4"></div>
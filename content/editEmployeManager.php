<?php
$admin = 'admin';
$manager = 'manager';
$userId = $_GET['id'];

if(isset($_SESSION['id']))
{
    if($_SESSION['job'] == $admin or $_SESSION['job'] == $manager){
        if (isset($_GET['id'])) {
          require_once("./scripts/db_connect.php");
          $sql = "SELECT * FROM employe WHERE id='$userId'";

          $result = mysqli_query($conn, $sql);
          $datas = array();
          if($row = mysqli_num_rows($result)> 0){
              while($row = mysqli_fetch_assoc($result)){
                  $datas[] = $row;
                }
          }
          foreach($datas as $data){
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $username = $data['username'];
            $tel = $data['tel'];
            $mail = $data['mail'];
            $job = $data['job'];

          }


        }else {
          
        }
    }
}else{
    header("Location: ./index.php?content=message&alert=no-permission");
}

//$sql = "UPDATE `employe` SET `firstname` = 'TestOber' WHERE `employe`.`id` = $userId;";

?>

 <!-- form update voor admin -->
 <link rel="stylesheet" href="../css/a-home.css">
<div class="container-fluid">
    <div class="row">

        <div class="col-4"></div>

        <div class="card col-4 registratie-margin-top registratie-margin-bottom registratie-color1 ">
            <div class="card-body">
                <div class="text-center">
                    <h1 class="card-title">Update werknemer</h1>
                    <h4 class="card-subtitle mb-2 text-muted">LET OP!!!<br> bij het updaten van de gebruiker<br> moet het wachtwoord opnieuw<br> worden ingevoerd of veranderd.  </h4>
                </div>

                <form action="./index.php?content=updateEmployeScript" method="POST">
                    <div class="form-container">
                        <div class="form-row">

                            <div class="form-group col-12">
                                <i class="fa fa-user"></i>
                                <label for="inputusername">voornaam</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Voornaam" value="<?php echo "$firstname" ?>" required autofocus>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-12">
                                <i class="fa fa-user"></i>
                                <label for="inputusername">Achternaam</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="lastname" value="<?php echo "$lastname" ?>" required>
                            </div>
                        </div>


                        <div class="form-row">

                            <div class="form-group col-12">
                                <i class="fa fa-user"></i>
                                <label for="inputusername">Gebruikersnaam</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo "$username" ?>" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-envelope"></i>
                                <label for="inputusername">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo "$mail" ?>" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-phone"></i>
                                <label for="inputusername">Telefoonnummer</label>
                                <input type="number" name="tel" class="form-control" id="tel" placeholder="Telefoonnummer" value="<?php echo "$tel" ?>"  required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputPassword4">Wachtwoord</label>
                                <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required>
                            </div>

                            <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputAddress">Herhaal Wachtwoord</label>
                                <input type="password" name="cpass" class="form-control" id="inputVerifyPassword" placeholder="Verify Password" required>
                                <br>
                                <input type="hidden" name="userId" value="<?php echo "$userId" ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-book"></i>
                                <label for="inputAddress">Job</label>
                                <select name="job" id="job" required>
                                    <option value="chef">Chef</option>
                                    <option value="bartender">Barman/Barvrouw</option>
                                    <option value="ober">Ober</option>
                                </select>
                                <br>
                            </div>
                        </div>

                        <button type="submit" class="panel-button" value="checkpassword">Maak Werknemer aan</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
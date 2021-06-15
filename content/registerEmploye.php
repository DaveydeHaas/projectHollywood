<?php
if (empty($_POST["username"])) {
    header("Location: ./index.php?content=message&alert=no-username");
} else {
    if (empty($_POST["email"])) {
        header("Location: ./index.php?content=message&alert=no-email");
    } else {
        if (empty($_POST["pass"])) {
            header("Location: ./index.php?content=message&alert=no-pass");
        } else {
            if (empty($_POST["cpass"])) {
                header("Location: ./index.php?content=message&alert=no-cpass");
            } else {
                if(empty($_POST["job"])){
                    
                }else{
                    if (empty($_POST["pass"]) || empty($_POST["cpass"])) {
                    header("Location: ./index.php?content=message&alert=no-pass-match");
                } else {
                    include("./scripts/db_connect.php");
                    include("./scripts/functions.php");

                    $email = sanitize($_POST["email"]);
                    $username = sanitize($_POST["username"]);
                    $password = sanitize($_POST["pass"]);
                    $verifypassword = sanitize($_POST["cpass"]);
                    $userrole = sanitize($_POST["job"]);

                    $sql = "SELECT * FROM `users` WHERE `email` = '$email' ";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)) {
                        //email bestaat al
                        header("Location: ./index.php?content=message&alert=email-exists");
                    } else {

                        $sql = "SELECT * FROM `employe` WHERE `username` = '$username' ";

                        $result2 = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result2)) {
                            //username bestaat al
                            header("Location: ./index.php?content=message&alert=username-exists");
                        } else {


                            if ($password == $verifypassword) {

                                $password_hash = password_hash($password, PASSWORD_BCRYPT);
                                //Gegevens sturen naar de database tabel users

                                $sql = "INSERT INTO `employe` (`id`, `firstname`, `lastname`, `mail`, `username`, `password`, `tel`, `job`) VALUES (NULL, 'Test', 'Test', '$email', '$username', '$password_hash', '0621312816', '$userrole');";
                                    if (mysqli_query($conn, $sql)) {
                                        var_dump($_POST);
                                    }else
                                    {
                                       
                                        
                                    }
                            } else {
                                header("Location: ./index.php?content=message&alert=password-no-match");
                            }
                        }
                    }
                }
                }
            }
        }
    }
}

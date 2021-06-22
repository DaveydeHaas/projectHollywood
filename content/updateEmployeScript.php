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

                    $firstname = sanitize($_POST["firstname"]);
                    $lastname = sanitize($_POST["lastname"]);
                    $email = sanitize($_POST["email"]);
                    $username = sanitize($_POST["username"]);
                    $password = sanitize($_POST["pass"]);
                    $verifypassword = sanitize($_POST["cpass"]);
                    $userrole = sanitize($_POST["job"]);
                    $tel = sanitize($_POST["tel"]);
                    $userId = sanitize($_POST["userId"]);
                            if ($password == $verifypassword) {

                                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                                $sql = "UPDATE `employe`
                                set 
                                `firstname` = '$firstname',
                                `lastname` = '$lastname',
                                `username` = '$username',
                                `mail` = '$email',
                                `tel` = '$tel',
                                `job` = '$userrole' WHERE id=$userId";
                                    if (mysqli_query($conn, $sql)) {
                                        header("Location: ./index.php?content=message&alert=update-succesfull");
                                    }else
                                        header("Location: ./index.php?content=message&alert=update-unsuccesfull");
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



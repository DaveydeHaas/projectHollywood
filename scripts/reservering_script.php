<?php
echo $_GET;
if (empty($_POST["firstname"])) {
    header("Location: ./index.php?content=message&alert=no-firstname");
} else {
    if (empty($_POST["lastname"])) {
        header("Location: ./index.php?content=message&alert=no-lastname");
    } else {
        if (empty($_POST["email"])) {
            header("Location: ./index.php?content=message&alert=no-email");
        } else {
            if (empty($_POST["tel"])) {
                header("Location: ./index.php?content=message&alert=no-tel");
            } else {
                    include("./scripts/db_connect.php");
                    include("./scripts/functions.php");

                    $firstname = sanitize($_POST["firstname"]);
                    $lastname = sanitize($_POST["lastname"]);
                    $email = sanitize($_POST["email"]);
                    $tel = sanitize($_POST["tel"]);

                    $sql = "INSERT INTO `customer`(`customer_Id`, `username`, `email`, `tel`) VALUES(NULL, '$firstname', '$lastname', '$email', '$tel')";
            }
        }
    }
};
?>
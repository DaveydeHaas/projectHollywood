<?php
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
                    $timeZone = sanitize($_POST["timeZone"]);
                    $maand = sanitize($_POST["maand"]);
                    $jaar = sanitize($_POST["jaar"]);
                    $dag = sanitize($_POST["dag"]);
                    $amount = sanitize($_POST["amount"]);
                    $lunchdiner = sanitize($_POST["lunch/diner"]);

                    $sql = "INSERT INTO `customer`(`customer_Id`, `username`, `email`, `tel`) VALUES(NULL, '$firstname', '$lastname', '$email', '$tel')";
                    $sql2 = "INSERT INTO `reservering`(`id`,`timeSlot`,`customer_Id`,`lunch/diner`,`maand`, jaar, dag, amount VALUES(NULL, '$timeZone', NULL, '$lunchdiner','$maand', '$jaar','$dag', $amount";
                    mysqli_query($conn, $sql);
                    mysqli_query($conn, $sql2);
                    header("Location: ./index.php?content=message&alert=reservation-succesfull");
            }
        }
    }
};
?>
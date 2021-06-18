<?php
$userrole = 'admin';
if(isset($_SESSION['id'])){
    if($_SESSION['job'] == $userrole){
        require_once("scripts/elements.php");
        include("./scripts/db_content.php");
    }else{
        header("Location: ./index.php?content=message&alert=no-permission");
    }
}
else{
    header("Location: ./index.php?content=message&alert=no-permission");
}





?>
<link rel="stylesheet" href="../css/a-home.css">
<div class="container">
<div class="row">
    <div class="col-12">
    <table style="width: 100%;">
    <tr style="background-color: royalblue; color: #FFFFFF;">
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Username</th>
        <th>Job</th>
        <th>Tel</th>
        <th>Email</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php 
            $result = getDataEmploye();
            while($row = mysqli_fetch_assoc($result)){
                employeDataSheet($row['firstname'], $row['lastname'], $row['username'], $row['job'], $row['tel'], $row['mail'], $row['id']);
            }
    ?>
    </table>
    
    </div>
    <div class="col-12"><a href="/index.php?content=registratie"><button class="panel-button">Maak gebruiker aan</button></a></div>
</div>
</div>



<?php
require_once("scripts/elements.php");
include("./scripts/db_content.php");

$sql = "SELECT `firstname`,`lastname`,`username`,`job`,`tel`,`mail` from employe WHERE `job` NOT IN ('admin') order by `job`";

?>

<div class="container">
<div class="row">
    <div class="col-12">
    <table style="width: 100%;">
    <tr>
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
                employeDataSheet($row['firstname'], $row['lastname'], $row['username'], $row['job'], $row['tel'], $row['mail']);
            }
    ?>
    </table>

    </div>
</div>
</div>



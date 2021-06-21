<link rel="stylesheet" href="../css/order.css">
<?php

include("./scripts/db_connect.php");


$query = 
'SELECT * 
FROM `chef`';

$result = mysqli_query($conn, $query);
while ($product = mysqli_fetch_assoc($result)) {

?>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    <div class="dropdown">
                        <span><?php echo $product['id'] ?></span>
                        <div class="dropdown-content">
                            <br>
                            | table 
                            <?php echo $product['table_Id'] ?>
                            | Item
                            <?php echo $product['item'] ?>
                            | request <?php echo $product['request'] ?> |
                            <a name="done" href="./index.php?content=deleteChef&id=<?php echo $product['id'] ?>">done</a>
                        </div>
                    </div>
                </th>
            </tr>
        </tbody>
    </table>
<?php
}
?>
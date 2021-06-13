<link rel="stylesheet" href="../css/order.css">
<?php

include("./scripts/db_connect.php");


$query = 
'SELECT * 
FROM `order_on_site`';

$result = mysqli_query($conn, $query);
while ($product = mysqli_fetch_assoc($result)) {

?>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    <div class="dropdown">
                        <span><?php echo $product['order'] ?></span>
                        <div class="dropdown-content">
                            <br>
                            | table 
                            <?php echo $product['table'] ?>
                            | Item
                            <?php echo $product['item'] ?>
                            | request <?php echo $product['request'] ?> |
                        </div>
                    </div>
                </th>
            </tr>
        </tbody>
    </table>
<?php
}
?>
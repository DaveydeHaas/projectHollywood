
<?php
 
 include("./scripts/connectdb.php");

 $query = 'SELECT name, lastname, address, address_2, card_name, city FROM `customer`';

$result = mysqli_query($conn, $query);
        while ($product = mysqli_fetch_assoc($result)) {

?>
            <table class="table">
             
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $product['name'] ?></td>
                        <td><?php echo $product['lastname'] ?></td>
                        <td><?php echo $product['address'] ?></td>
                        <td><?php echo $product['address_2'] ?></td>
                        <td><?php echo $product['card_name'] ?></td>
                        <td><?php echo $product['city'] ?></td>
                    </tr>
                </tbody>
            </table>
<?php
        }
    

?>
<?php

$no = $_GET["no"];  
$name = $_GET["name"]; 
$price = $_GET["price"]; 
$code = $_GET["code"]; 
$qty = $_GET["qty"]; 
$total=$qty*$price;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ItemStore</title>
</head>

<body>
    <h1 align="center">Amart Stationary private limited</h1>
        <center>
            <table cellpadding="10px" border="1px;">
                
                 <tr>
                     <th>Itemname</th>
                     <th>Item Price</th>
                     <th>Item Code</th>
                     <th>Quantity</th>
                     <th>Date Of purchase</th>
                     <th>Total amount</th>
                </tr>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $price ?></td>
                    <td><?php echo $code ?></td>
                    <td><?php echo $qty ?></td>
                    <td><?php echo date("Y-m-d") ?></td>
                    <td><?php echo $total ?></td>
                </tr>
            </table>

            <a href="pg12.php">Continue Shopping</a>
        </center>
</body>

</html>
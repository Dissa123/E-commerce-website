<?php
require_once("../inc/connection.php");
$query = " SELECT * FROM orders";
$result_set = mysqli_query($connection,$query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addproduct.css">

</head>

<body>
    <div class="maintb">
        <table class="tb">
            <tr>
                <th>Order Number</th>
                <th>customer Name</th>
                <th>Photo</th>
                <th>province</th>
                <th>District</th>
                <th>City</th>
                <th>Payment Method</th>
            </tr>


            <!--fetch data-->
            <?php

            while ($record = mysqli_fetch_assoc($result_set)) {
                $o_id = $record["order_id"];
                $c = $record['c_name'];
                $p = $record['phone'];
                $pro = $record['province'];
                $dis = $record['district'];
                $city = $record['city'];
                $pm = $record['payment_method'];


            ?>

                <!--data add in the column-->

                <tr>
                    <td><?php echo $o_id ?></td>
                    <td><?php echo $c ?></td>
                    <td><?php echo $p ?></td>
                    <td><?php echo $pro ?></td>
                    <td><?php echo $dis ?></td>
                    <td><?php echo $city ?></td>
                    <td><?php echo $pm ?></td>
                    <td><a href="../useerAccount/orderD.php?id=<?php echo $o_id?>"style="background-color:#58D68D;padding:10px;color:aliceblue"> ORDEROK</a></td>
                   
                 
                    <td><a href="../adminPannel/orders/adminOrderT/view.php?id=<?php echo $o_id?>" style="background-color:#EE5B3C;padding:10px;color:aliceblue">Delete</a></td>
                    
                </tr>
            <?php } ?>
        </table>

        

    </div>

    <style>
        .maintb .tb th {
            color: white;
            background-color: rgb(145, 93, 93);
            padding: 10px;

        }

        .maintb .tb td {
            background-color: rgb(250, 250, 250);
            padding: 10px;
        }

        .maintb .tb {
            margin-right: auto;
            margin-left: auto;
            position: relative;
            bottom: -20rem;
            width: 80%;
            top: -26rem;
            left: 60px;
        }
    </style>
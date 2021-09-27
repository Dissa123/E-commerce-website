<?php 
$query = " SELECT * FROM product";
$result_set = mysqli_query($connection, $query);

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
                <th>Product Number</th>
                <th>product Name</th>
                <th>Photo</th>
                <th>Description</th>
                <th>price</th>
                <th>size</th>
                <th>ShirtType</th>
            </tr>


            <!--fetch data-->
            <?php
            
            while ($record = mysqli_fetch_assoc($result_set)) {
                $pid = $record["product_id"];
                $pt = $record['product_title'];
                $add_p = $record['add_photos'];
                $des = $record['description']; 
                $price = $record['price']; 
                $size = $record['size']; 
                $tname = $record['t_name']; 


            ?>

                <!--data add in the column-->

                <tr>
                    <td><?php echo $pid?></td>
                    <td><?php echo $pt?></td>
                    <td><?php echo $add_p?></td>
                    <td><?php echo $des?></td>
                    <td><?php echo $price?></td>
                    <td><?php echo $size?></td>
                    <td><?php echo $tname?></td>
                    <td><a href="products/pprocess.php?id=<?php echo $pid?>" class="update" style="background-color:#58D68D;padding:10px;color:aliceblue">Update</a></td>
                    <td><a href="products/pdelete.php?did=<?php echo $pid?>" style="background-color:#EE5B3C;padding:10px;color:aliceblue">Delete</a></td>
                </tr>
            <?php } ?>
        </table>




    </div>

    <!--Update Button style-->
    <style>
    td a{
        text-decoration: none;
        
    }
    </style>
<?php require_once('../inc/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="products/addproduct.css">
    <link rel="stylesheet" href="clock2/clock.css">
    <link rel="stylesheet" href="products/productT.css">
</head>

<body>
    <div class="side-navbar">
        <a href="#D">Dashboard</a>
        <a href="#p">Products</a>
        <a href="#o">Orders</a>
        <a href="#a">Customer Details</a>
    </div>

    <div class="contact-area">
        <div class="wrapper">
            <div id="D" class="banner">
                <div class="text-content">
                    <?php include("clock2/clock.php");?>
                   
                </div>

            </div>

            <div id="p" class="product">
                <div class="text-content">
                  
                    <?php include("products/addproduct.php");?>
                    <?php include("products/productT.php");?>
                   
                    
                </div>

            </div>

            <div id="o" class="order">
                <div class="text-content" style="position: relative; top:40rem;">
                    <?php include('./orders/adminOrderT/orderT.php');?>
                </div>

            </div>

            <div id="a" class="order">
                <div class="text-content">

                    <!--Tabel-->
                    <?php 
                       $query = " SELECT * FROM user_details";
                       $result_set = mysqli_query($connection, $query);

                       if($result_set){
                           //echo "Query sucsess";
                           // echo mysqli_num_rows($result_set);

                           $table = "<table>";
                           $table .= "<tr><th>First Name</th><th>Last Name</th><th>E-mail</th><th>Phone Number</th>";


                          while($record = mysqli_fetch_assoc($result_set)){
                              $id = $record['user_id'];
                              $table .= "<tr>";
                              $table .= "<td>" . $record['first_name'] ."</td>";
                              $table .= "<td>" . $record['last_name'] ."</td>";
                              $table .= "<td>" . $record['Email'] ."</td>";
                              $table .= "<td>" . $record['phone_number'] ."</td>";
                              $table .= "<td>"."<a href=update.php?GetID=$id>Edit</a>"."</td>";
                              $table .= "<td>"."<a href=delete.php?del=$id>Delete</a>"."</td>";
                              $table .= "</tr>";
                          }
                          $table .= "</table>";
                       }
                     echo $table; 
                    ?>
                    
                </div>

            </div>
        </div>
    </div>
    <script src="clock2/myscripts.js"></script>
</body>

</html>

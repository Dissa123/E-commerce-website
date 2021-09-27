<?php session_start();?>
<?php require_once("../../inc/connection.php");?>
<?php 
        if (isset($_POST["sub"])) {
            $c_name = $_POST["na"];
            $phone = $_POST["pn"];
            $province = $_POST["province"];
            $district = $_POST["dis"];
            $city = $_POST["city"];
            $payM = $_POST["pay"];
            
            $sql="INSERT INTO `orders`(`c_name`,`phone`,`province`,`district`,`city`,`payment_method`) 
            VALUES('$c_name','$phone','$province','$district','$city','$payM');";
             

            mysqli_query($connection,$sql);
            
            $_SESSION ["name"] = $c_name;
              
            $_SESSION ["phone"] = $phone;
              
            $_SESSION ["province"] = $province;
              
            $_SESSION ["district"] = $district;
              
            $_SESSION ["city"] = $city;
            
            
            header("location:ordersok.php");
        
        } 
        var_dump($phone);
      
       
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="order.css">
</head>

<body>
    <div class="zoro">
        <div class="left1">
            <img src="img.jpg">
        </div>
        <div class="right1">
            <form action="orders.php" method="post" onsubmit="return validate()">
                <label for="title">Name</label><br>
                <input type="text" id="na" class="na" name="na"><br>

                <label for="pn">Phone Number</label><br>
                <input type="number" id="pn" class="pn" name="pn"><br>

                <label for="province">Province</label><br>
                <input type="text" id="province" class="province" name="province"><br>

                <label for="dis">District</label><br>
                <input type="text" id="dis" class="dis" name="dis"><br>

                <label for="ci">City</label><br>
                <input type="text" id="city" class="city" name="city"><br>

                <label for="pay">Payment Method</label>  
                <input type="text" id="pay" name="pay" value="Cash On Delivery" readonly> 

                <input type="submit" class="btn" name="sub" value="ORDER NOW" >
                
            </form>

        </div>

    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../../js/orders.js"> </script>
</body>
</html>

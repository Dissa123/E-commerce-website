<?php require_once('../inc/connection.php'); ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM orders where order_id = '$id'";
$result_set = mysqli_query($connection, $query);

while ($record = mysqli_fetch_assoc($result_set)) {
    $id = $record["order_id"];
    $cn = $record['c_name'];
    $p = $record['phone'];
    $pro = $record['province'];
    $diss = $record['district'];
    $city = $record['city'];
    $pm = $record['payment_method'];
}

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
            <img src="../orders/img.jpg">
        </div>
       
        <div class="right1">
            <form  action="orderTup.php?ID=<?php echo $id?>" method="post">
                <label for="title">Name</label><br>
                <input type="text" id="na" class="na" name="na" value="<?php echo $record['c_name']?>"><br>

                <label for="pn">Phone Number</label><br>
                <input type="number" id="pn" class="pn" name="pn" value="<?php echo $p ?>"><br>

                <label for="province">Province</label><br>
                <input type="text" id="province" class="province" name="province" value="<?php echo $record['phone'] ?>"><br>

                <label for="dis">District</label><br>
                <input type="text" id="dis" class="dis" name="dis" value="<?php echo $dis ?>"><br>

                <label for="ci">City</label><br>
                <input type="text" id="city" class="city" name="city" value="<?php echo $diss ?>"><br>

                <label for="pay">Payment Method</label>
                <input type="text" id="pay" name="pay" value="Cash On Delivery" readonly>

                <input type="submit" class="btn" name="sub" value="ORDER NOW">
            </form>


        </div>

    </div>
    <style>
        * {
            font-family: 'Nunito Sans', sans-serif;
            padding: 0;
            margin: 0;
        }

        .zoro {

            width: 50%;
            height: 600px;

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid black;



        }

        .zoro .left1 img {
            float: left;
            width: 50%;
            height: 600px;
            background-size: cover;
            box-sizing: border-box;
        }

        .zoro .right1 {
            float: right;
            width: 50%;
            height: 600px;
            box-sizing: border-box;
        }

        form {
            position: relative;
            top: -40px;
            width: 100%;
            padding: 80px 40px;
            box-sizing: border-box;
        }

        form input {
            margin-bottom: 20px;
            width: 100%;
            padding: 10px;
        }

        form .btn {
            background-color: white;
            border: 1px solid black;
            margin: 10px;
        }

        form .btn:hover {
            background-color: black;
            color: white;
        }
    </style>


</body>

</html>
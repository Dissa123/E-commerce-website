<?php session_start(); ?>
<?php require_once("../../inc/connection.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="head">
        <div class="img">
            <img src="ok.png" style="width: 50%; height:50%">
        </div>

        <div class="details">
            <h2>Thank you <?php echo $_SESSION ["name"]?></h2>
            <h3>Your Order is SuccessFully Completed</h3>
            <h4>Your name:<?php echo $_SESSION ["name"]?></h4>
            <h4>Your phone Number:<?php echo $_SESSION ["phone"]?></h4>
            <h4>Your Province:<?php echo $_SESSION ["province"]?></h4>
            <h4>Your District:<?php echo $_SESSION ["district"]?></h4>
            <h4>Your city:<?php echo $_SESSION ["city"]?></h4>
            <form action="../../useerAccount/orderD.php?id="<?php echo $_SESSION ["name"];?>>
                <button type="submit" value="Your order">Your Order</button>
            </form>
           
        </div>

    </div>


    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .head {

            border: 1px solid black;
            width: 25%;
            margin-left: auto;
            margin-right: auto;

        }

        .details {
            text-align: center;
        }

        .img img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
    </style>
</body>

</html>
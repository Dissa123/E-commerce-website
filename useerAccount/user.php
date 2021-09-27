<?php session_start();?>
<?php require_once("../inc/connection.php");?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="hero">
    <div class="pic">
        <img src="u.png" class="u">
    </div>

    <div class="detail">
        <h3>Name :<?php echo $_SESSION ["name"];?>&nbsp<?php echo $_SESSION ["lname"];?></h3>
        <h3>Email :<?php echo  $_SESSION ["email"]?></h3>
        <h3>Phone Number :<?php echo  $_SESSION ["phone"]?></h3>
        <form action="orderD.php">
            <input type="submit" name="sub" action="orderD.php" value="Orders">
        </form>
    </div>

    <div class="member">
    </div>
</div>
</body>
<style>
body{
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.hero{
    border: 1px solid black;
    width: 40%;
    margin-left: auto;
    margin-right: auto;
}
.hero img{
    background-size: cover;
    box-sizing: border-box;
    
   
}
 .hero .detail{
    box-sizing: border-box;
    width: 100%;
    text-align: center;
} 


</style>
</html>
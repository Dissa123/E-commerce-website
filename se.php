<?php session_start(); ?>
<?php require_once('inc/connection.php') ?>

<?php 
$te = $_SESSION["user_id"];
$query = "SELECT * FROM user_details where user_id = $te";
$result_set = mysqli_query($connection, $query);

while ($record = mysqli_fetch_assoc($result_set)) {
   $id = $record['user_id'];
   $fn = $record['first_name'];
   $ln = $record['last_name'] ;
   $el = $record['Email'] ;
   $pn = $record['phone_number'];

   $_SESSION ["name"] = $fn;
              
   $_SESSION ["lname"] = $ln;
     
   $_SESSION ["email"] = $el;
     
   $_SESSION ["phone"] = $pn;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="se.css">
</head>

<body>
    <div class="con">
        <div class="conone">
            <p class="para" style="text-align: center; possion:relative; font-size:25px;">Welcome <?php echo $_SESSION['first_name']; ?>!
                <a href="logout.php" class="log" style="color: blue;display:block; font-size:20px;">Log Out</a>
                <a href="./useerAccount/user.php?id="<?php echo $id?> class="account" style="color: blue;display:block; font-size:20px;">Account</a>
            </p>
        </div>

        <?php include 'Home.php'; ?>

    </div>


</body>

</html>
<?php 
require_once('connection.php');
if(count($_POST)>0) {
    mysqli_query($connection,"UPDATE employee SET user_id='".$_POST['user_id']."', first_name='".$_POST['text']."' ,last_name='".$_POST['last']."' ,Email='".$_POST['email']."' ,phone_number='".$_POST['tel']."'");
    $message = "Record Modified Successfully";

}

$result = mysqli_query($connection,"SELECT * FROM user_details WHERE user_id='" . $_GET['user_id'] . "'");

$row= mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <div class="formBox">
                <form action="" method="post" class="userform">
                <div><?php if(isset($message)) { echo $message; } ?></div>
                <div style="padding-bottom:5px;">
                <a href="update.php">Employee List</a>
                </div>
                Username: <br>
                <input type="hidden" name="user_id" class="txtField" value="<?php echo $row['user_id']; ?>">
                <input type="text" name="user_id"  value="<?php echo $row['user_id']; ?>">
                <br>
                    
                    <p>First Name</p>
                    <input type="text" name="text" placeholder="First name" value="<?php echo $row['first_name']; ?>">
                    <p>Last Name</p>
                    <input type="text" name="last" placeholder="Last name" value="<?php echo $row['last_name']; ?>">
                    <p>E-mail</p>
                    <input type="email" name="email" placeholder="E-mail" value="<?php echo $row['Email']; ?>">
                    
                    <p>Phone number</p>
                    <input type="tel" name="tel" placeholder="Phone number" pattern="07[1,2,5,6,7,8][0-9]{7}" maxlength="10" value="<?php echo $row['phone_number']; ?>">
                    <input name="btn" type="submit" value="Sign up">
                </form>
            
            </div>
        </div>
    </div>
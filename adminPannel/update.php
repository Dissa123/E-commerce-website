<?php require_once('../inc/connection.php'); ?>
<?php 
    $id = $_GET['GetID'];
    $query = "SELECT * FROM user_details where user_id = $id";
    $result_set = mysqli_query($connection, $query);

    while($record = mysqli_fetch_assoc($result_set)){
        $id = $record['user_id'];
        $fn = $record['first_name'];
        $ln = $record['last_name'] ;
        $el = $record['Email'] ;
        $pn = $record['phone_number'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../register.css">
</head>
<body>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <div class="formBox">
                <form action="upshow.php?ID=<?php echo $id?>" method="post" class="userform">
                    <h1>SIGN UP</h1>
                    <p>First Name</p>
                    <input type="text" name="text" placeholder="First name" value=<?php echo $fn?>>
                    <p>Last Name</p>
                    <input type="text" name="last" placeholder="Last name" value=<?php echo $ln?>>
                    <p>E-mail</p>
                    <input type="email" name="email" placeholder="E-mail" value=<?php echo $el?> required>
                    <p>Password</p>
                    <input type="password" name="pass" placeholder="Password" id="pass" value=<?php echo $pn?> required>
                    <p>Phone number</p>
                    <input type="tel" name="tel" placeholder="Phone number" pattern="07[1,2,5,6,7,8][0-9]{7}" maxlength="10" value=<?php echo $pn?> required>
                    <input name="update" type="submit" value="Update">
                </form>
            
            </div>
        </div>
    </div>
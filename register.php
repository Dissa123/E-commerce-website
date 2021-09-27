<?php require_once('inc/connection.php'); ?>
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
                <form action="register.php" method="post" class="userform" onsubmit="return validate()">
                    <h1>SIGN UP</h1>
                    <p>First Name</p>
                    <input type="text" name="text" placeholder="First name" id="fn">
                    <p>Last Name</p>
                    <input type="text" name="last" placeholder="Last name">
                    <p>E-mail</p>
                    <input type="email" name="email" placeholder="E-mail" id="em" required>
                    <p>Password</p>
                    <input type="password" name="pass" placeholder="Password" id="pass" required>
                    <p>Phone number</p>
                    <input type="tel" name="tel" placeholder="Phone number" pattern="07[1,2,5,6,7,8][0-9]{7}" maxlength="10" required>
                    <input name="btn" type="submit" value="Sign up">
                </form>
            
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./js/register.js"></script>
    <?php
    echo "ok"; 
        if(isset($_POST["btn"])){
            $fname = $_POST["text"];
            $lname = $_POST["last"];
            $email = $_POST["email"];
            $p = $_POST["pass"];
            $phone = $_POST["tel"];
            if (!$connection) {
                die("Sorry, We are facing Technical error");
            }
            $sql="INSERT INTO `user_details` (`user_id`, `first_name`, `last_name`, `Email`, `password`, `last_login`, `phone_number`, `is_deleted`) 
            VALUES (NULL, '".$fname."', '".$lname."', '".$email."', '".$p."', CURRENT_TIMESTAMP, '".$phone."', '0');";

            mysqli_query($connection,$sql);

            //header("Location:login.php");
        }
        var_dump($fname);
    ?>

    <script>
        function vpass(){
            
            let pw = document.getElementById("pass").value;
            //check empty password

            if(pw == ""){
                document.getElementById("message").innerHTML = "**Fill the password please!";  
                return false;  
            }
        }
    
    </script>
    
</body>
</html>
<?php mysqli_close($connection);?>



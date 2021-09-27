<?php session_start();  ?>
<?php require_once('inc/connection.php');?>

<?php
  if(isset($_POST['submit'])){  
    $errors = array();
    //check form submition

    //check if the username and password has been entered
    if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1){
        $errors[] ="User is Missing";
    }

    if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
        $errors[] ="Password is Missing";
    }

    //check if there are any errors in the form

    if(empty($errors)){
        // save username and password into variable
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = sha1($password);

        //prepare query
        $query = "SELECT * FROM user_details
                    WHERE Email = '{$email}'
                    AND password = '{$password}'
                    LIMIT 1";
        $result_set = mysqli_query($connection, $query);

        if($result_set){
            //query ok
            if(mysqli_num_rows($result_set) == 1){
                //valid user found
                $user = mysqli_fetch_assoc($result_set);
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION["first_name"] = $user["first_name"];
                //redirect to ...........

                header('Location:se.php');
            }else{
                //Inavlid
                $errors[] = "inavalid username / password";
                //echo "<script>window.location='login.php?loginfail';</script>";
            }

        }else{
            $errors[] = "Database query failed";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="login.css">
</head>



<body>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <div class="formBox">
                <form method="post">
                    <h1>Login</h1>
                    <p>E-mail</p>
                    <input type="email" name="email" placeholder="E-mail">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="submit" value="Sign In">
                    <p class="one">Don't have an account? <a href="register.php">Sign up</a></p>
                </form> 
            </div>
        </div>
    </div>

    <!-- popup Alert -->
    

    <!--<?php if(isset($_GET['loginfail'])){ ?>
    <script>
    swal("Loging Fail!", "Your message...", "error");
    </script>
    <?php } ?>-->


    <?php 
        if(isset($errors) && !empty($errors)){  ?>
            <script>
                swal('Loging Fail!', 'Your message...', 'error');
            </script>
   <?php } ?>
  

</body>

</html>
<?php mysqli_close ($connection);?>
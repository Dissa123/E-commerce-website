<?php require_once('../inc/connection.php'); ?>
<?php  
    if(isset($_POST['update'])){
        $userID = $_GET['ID'];
        $fname = $_POST["text"];
        $lname = $_POST["last"];
        $email = $_POST["email"];
        $phone = $_POST["tel"];

        //$query = "UPDATE user_details SET first_name ='$fname',last_name='$lname',Email='$email',phone_number='$phone', WHERE user_id='$userID'";
       // $query = "update user_details set first_name='".$fname."',last_name='".$lname."',Email='".$email."' where user_id='".$userID."'";
        //$query ="UPDATE user_details SET first_name='".$fname."',last_name='".$lname."',Email='".$email."',phone_number='".$phone."', WHERE user_details='".$userID."'";
        $sql = "UPDATE user_details SET first_name = '$fname' ,last_name = '$lname',Email = '$email',phone_number = '$phone' WHERE user_id='$userID'";

        $result = mysqli_query($connection,$sql);

        if($result){
            header("location:admin.php");
        }else{
            echo "Check your query";
        }
    }else{
        header("location:admin.php");
    }
    var_dump($query);


?>
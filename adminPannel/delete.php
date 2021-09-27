<?php require_once('../inc/connection.php'); ?>
<?php  
    if(isset($_GET['del'])){
        $userID =$_GET['del'];
        $query = "DELETE FROM `user_details` WHERE user_id = '".$userID."'";
        $result = mysqli_query($connection,$query);

        if($result){
            header("location:admin.php");
        }else{
            echo "bad";
        }
    }

?>
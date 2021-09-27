<?php require_once('../../../inc/connection.php');?>
<?php  
    if(isset($_GET['id'])){
        $userID =$_GET['id'];
        $query = "DELETE FROM `orders` WHERE order_id = '$userID'";
        $result = mysqli_query($connection,$query);

        if($result){
            header("location:../../admin.php"); 
        
        }else{
            echo "bad";
        }
    }

?>
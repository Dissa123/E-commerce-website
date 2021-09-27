<?php require_once('../../inc/connection.php'); ?>
<?php 
    
    if(isset($_GET['did'])){
        $pID = $_GET['did'];
        $query = "DELETE FROM `product` WHERE product_id = '$pID'";
        $result = mysqli_query($connection,$query);

        if($result){
            header("location:../admin.php");
        }else{
            echo "query error";
        }
    }

?>
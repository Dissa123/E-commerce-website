<?php require_once('../../inc/connection.php'); ?>
<?php  
    if(isset($_POST['sub'])){
            $id = $_GET['ID'];
            $c_name = $_POST["na"];
            $phone = $_POST["pn"];
            $province = $_POST["province"];
            $district = $_POST["dis"];
            $city = $_POST["city"];
            $payM = $_POST["pay"];

       
        $sql = "UPDATE orders SET `c_name` ='$c_name' ,`phone` ='$phone',`province` ='$province',`district` ='$district',`city` ='$city',`payment_method`='$payM' WHERE order_id='$id'";

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
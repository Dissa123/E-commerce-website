<?php require_once("../../inc/connection.php");?>
<?php 
    if(isset($_POST['update'])){
        $pid = $_GET['ID'];
        $ptitle = $_POST['title'];
        $pimg = $_POST['file'];
        $pdes = $_POST['description'];
        $psize = $_POST['siz'];
        $ptype = $_POST['t_name'];
        $pprice = $_POST['price'];

        $sql = "UPDATE product SET product_title='$ptitle',add_photos='$pimg',description='$pdes',price='$pprice',size='$psize',t_name='$ptype' WHERE product_id='$pid';";
        $result = mysqli_query($connection,$sql);

        if($result){
            header("location:../admin.php");
        }else{
            echo "please check query";
        }

    }else{
        header("location:../admin.php");
    }
?>


<?php require_once('../inc/connection.php'); ?>

<?php 
   if(isset($_POST['submit'])){
       
        $pt = $_POST['title'];

        $file = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $temp_name = $_FILES['file']['tmp_name'];
        $textareaValue = trim($_POST['com']);

        $p = $_POST['price'];
        $size = $_POST['siz'];
        $t_name = $_POST['t_name'];

        $upload_to ='products/img/';//this is a image saving path

        $query = "INSERT INTO `product`(`product_title`, `add_photos`, `description`, `price`,`size`,`t_name`) 
        VALUES ('$pt','$file','$textareaValue','$p','$size','$t_name')";

        $result = mysqli_query($connection,$query);

        if($result){
             move_uploaded_file($temp_name,$upload_to.$file);//this is a photo save in folder
        }
   } 
?>


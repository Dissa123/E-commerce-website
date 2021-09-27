<?php session_start();?>
<?php require_once("../inc/connection.php");
$query = " SELECT * FROM orders";
$result_set = mysqli_query($connection,$query);
?>



<?php 

if($_SESSION ["name"]){?>

   <img src="pen.png"  style="border-radius:30%; width:10%; height:20%;">
   <p>Pending Your Order......</p>

<?php } ?>

<?php

while ($record = mysqli_fetch_assoc($result_set)) {
    $o_id = $record["order_id"];
    $c = $record['c_name'];
    $p = $record['phone'];
    $pro = $record['province'];
    $dis = $record['district'];
    $city = $record['city'];
    $pm = $record['payment_method'];
}



    if ($_GET['id']) {?>
     
    
    <img src="ok.jpg" style="border-radius:30%; width:10%; height:20%;margin-left:auto;margin-right:auto;">
    <p>Your Order Completed...</p>
<?php } ?>

<style>

</style>




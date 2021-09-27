<?php 
require_once ('../../inc/connection.php');
?>

<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM product where product_id = $id";
    $result_set = mysqli_query($connection, $query);
$array = [];
    while ($record = mysqli_fetch_assoc($result_set)) {
       $array['product_id'] = $record['product_id'];
        /*$record['product_title'];
        $record['add_photos'];
        $record['description']; 
        $record['price']; 
        $record['size']; 
        $record['t_name']; */

    }
    print_r($record);
?>
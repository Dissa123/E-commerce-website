<?php ?>

<h3 class="h" style="text-align: center;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;background-color: black; color:white; padding:10px;">Shooping Cart</h3>
<table>
    <tr>
        <th style="width: 30%;">Product Description</th>
        <th style="width: 10%;">Quantity</th>
        <th style="width: 13%;">Price Details</th>
        <th style="width: 10%;">Total Price</th>
        <th style="width: 17%;">Remove Item</th>

    </tr>

  <?php 
     session_start();
    if (!empty($_SESSION["shopping_cart"])) {
        $total=0;
        foreach ($_SESSION["shopping_cart"] as $key => $value) {
            ?>

    <tr>
            <td><?php echo $value["product_name"]; ?></td>
            <td><?php echo $value["product_quantity"]; ?></td>
            <td><?php echo $value["product_price"]; ?></td>
            <td><?php echo number_format($value["product_quantity"]*$value["product_price"], 2); ?></td>
            <td><a href="adtocard.php?action=delete&id=<?php echo $value["product_id"]; ?>" class="rm">Remove</td>
            
    </tr>

    <?php
        $total = $total + ($value["product_quantity"]*$value["product_price"]);
        } 
    ?>
    <tr>
        <td colspan="3">Total </td>
        <td><?php echo number_format($total,2); ?></td>
        <td></td>
        <td><a href="../../../adminPannel/orders/orders.php" class="cout">Check Out</td>
    </tr>

    <?php
     } 
    ?>
</table>

  



<?php 
    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $key => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$key]);
                    echo '<style>alert("Product has been removed")</style>';
                    echo '<style>window.location="adtocard.php"</style>';
                }
            }
        }
    }

?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 15px;
}

table{
    
    margin-left: auto;
    margin-right: auto;
}

tr th{
    background-color: #e6e6e6;
}

td .cout{
    color: white;
    text-decoration: none;
    background-color:#009900;
    padding: 5px; 
    border-radius: 5px;
    border: 1px solid black;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}
td .rm{
    color: white;
    text-decoration: none;
    background-color:red;
    padding: 5px; 
    border-radius: 5px;
    border: 1px solid black;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

</style>
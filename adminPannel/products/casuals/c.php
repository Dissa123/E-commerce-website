<?php require_once('../../../inc/connection.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
  
    
    ?>

<!--add to card process-->
<?php 
session_start();
    if (isset($_POST["add"])){
        
            if(isset($_SESSION["shopping_cart"])){
                $item_arry_id = array_column($_SESSION["shopping_cart"],"product_id");
                if(!in_array($_GET["id"],$item_arry_id)){ //check already item add
                    $count = count($_SESSION["shopping_cart"]);
                    $item_array = array(
                        'product_id' => $_GET['id'],
                        'product_name' => $_POST['hidden_name'],
                        'product_price' => $_POST['hidden_price'],
                        'product_quantity' => $_POST['quantity'],
                    );
                    $_SESSION["shopping_cart"][$count] = $item_array;
                    echo '<script>window.location="../addtocard/adtocard.php"</script>';
                    
                }else{
                    echo '<script>alert("Product is already in the cart")</script>';
                    echo '<script>window.location="../addtocard/adtocard.php"</script>';
                }
            }else{
                $item_array = array(
                    'product_id' => $_GET['id'],
                    'product_name' => $_POST['hidden_name'],
                    'product_price' => $_POST['hidden_price'],
                    'product_quantity' => $_POST['quantity'],
                );
                $_SESSION["shopping_cart"][0] = $item_array;
            }
        
    }

?>

    <?php
    $name = $_GET['id'];
    echo $name;
    $sel = "SELECT * FROM product";
    $que = mysqli_query($connection, $sel);
    while ($row = mysqli_fetch_assoc($que)) {
        $id = $row['product_id'];
        $image = $row['add_photos'];
        $title = $row['product_title'];
        $t = $row['t_name'];
        $p = $row['price'];
        $des = $row['description'];
        if ($id == $name) {
    ?>

            <div class="left">
                <img src="../img/<?php echo $image ?>" alt="Denim Jeans" style="width:20%;">
            </div>
            <form method="post" action="c.php?action=add&id=<?php echo $name;?>">
                <div class="right">
                    <div class="title">
                        <h1><?php echo $title ?></h1>
                    </div>
                    <div class="des">
                        <p><?php echo $des ?></p>
                        <h2>Rs.<?php echo $p ?></h2>
                        <input type="text" name="quantity" class="q" value="1" placeholder="Quntity" style="margin:5px; padding:10px;">

                        <input type="hidden" name="hidden_name" value="<?php echo $title;?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $p;?>">

                        
                        <form action="../addtocard/adtocard.php">
                            <input type="submit" name="add" value="ADD CART" class="addbtn">
                        </form>

                        <form action="../../orders/orders.php">
                            <input type="submit" name="submit" value="CHECK OUT">
                        </form>
                    </div>
                </div>



            </form>


        <?php } ?>

    <?php } ?>


</body>

</html>


<style>
    img {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 15rem;
        height: 70%;
        width: 60%;
        transform: translateY(-50%);
    }

    .right {
        max-width: 40%;
        float: right;
        margin-right: 30rem;
        margin-top: 14%;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    input[type=submit] {

        background-color: white;
        border: none;
        color: black;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border: 2px solid black;
        width: 100%;
        transition: .7s ease;

    }

    input[type=submit]:hover {
        background-color: black;
        color: white;
    }
</style>
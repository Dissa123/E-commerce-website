<?php require_once("../../inc/connection.php"); ?>
<?php
$productID = $_GET['id'];
$query = "SELECT * FROM product where product_id= $productID";
$result = mysqli_query($connection, $query);

while ($record = mysqli_fetch_assoc($result)) {
    $pid = $record["product_id"];
    $pt = $record['product_title'];
    $add_p = $record['add_photos'];
    $des = $record['description'];
    $price = $record['price'];
    $size = $record['size'];
    $tname = $record['t_name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="productTUp.php?ID=<?php echo $pid?>" method="POST" enctype="multipart/form-data">
        <label for="title">Product Title</label><br>
        <input type="text" id="t" class="title" name="title" value="<?php echo $pt ?>"><br>

        <label for="img">Image upload</label><br>
        <input type="file" id="image" class="img" name="file" value="<?php echo $add_p ?>"><br>

        <label for="title">Item Description</label><br>
        <textarea name="description"><?php echo $des ?></textarea>
        <br>
        <label for="size">Choose a Size:</label>
        <select name="siz" id="cars" style="position: 'relative';top:10px;">
            <option value="xs-24-25">XS-24”-25”</option>
            <option value="s-26-27">S-26”-27”</option>
            <option value="M-28-29">M-28”-29”</option>
            <option value="L-30-32">L-30.5”-32</option>
        </select><br><br>

        <label for="tname">Shirt-Type:</label>
        <select name="t_name" id="t-name" style="position: 'relative';top:10px;">
            <option value="casualshirt">Casual shirt</option>
            <option value="fomalshirt">fomal shirt</option>
            <option value="Tshirt">T-shirt</option>
        </select><br><br>

        <label for="price">Price</label><br>
        <input type="text" id="price" class="price" name="price" value="<?php echo $price ?>"><br>


        <button type="submit" name="update" class="btn">update</button>
    </form>
</body>

</html>
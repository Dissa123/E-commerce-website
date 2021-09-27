<?php
require '../../../inc/connection.php';
?>

<?php
$sel = "SELECT * FROM product";
$que = mysqli_query($connection, $sel);
while ($row = mysqli_fetch_assoc($que)) {
    $image = $row['add_photos'];
    $title = $row['product_title'];
    $t = $row['t_name']; 
    $p = $row['price'];
    if($t == "casualshirt"){
    ?>
        <!DOCTYPE html>
        <html lang="en">
    
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="casualShirt.css">
        </head>
    
        <body>
            <div class="flex">
                <div class="card">
                    <img src="../img/<?php echo $image ?>" alt="Denim Jeans" style="width:100%">
                    <h1><?php echo $title?></h1>
                   <h3>RS.<?php echo $p?></h3>
                   <form method="post" action="c.php?id=<?php echo $row['product_id'];?>"">
                        <input type="submit" name="submit" value="View product" style="background-color: black;color: white;border: none;padding: 16px 32px;text-decoration: none;margin: 4px 2px;cursor: pointer;width:100%">
                   </form>               
                </div>
            </div>
    
        </body>
    
        </html>
    
    <?php } ?>
<?php }?>

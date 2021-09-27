<?php
require_once('../../inc/connection.php');

?>


<?php
$sel = "SELECT * FROM product";
$que = mysqli_query($connection, $sel);
while ($row = mysqli_fetch_assoc($que)) {
    $image = $row['add_photos'];
    $title = $row['product_title'];


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="img.css">
    </head>

    <body>
        <div class="flex">
            <div class="card">
                <img src="img/<?php echo $image ?>" alt="Denim Jeans" style="width:100%">
                <h1>Tailored Jeans</h1>
               
                <p>Some text about the jeans..</p>
                <p><button>Add to Cart</button></p>
            </div>
        </div>

    </body>

    </html>






<?php } ?>
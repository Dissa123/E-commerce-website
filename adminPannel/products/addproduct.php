<?php
require('../inc/connection.php');

?>



<?php
include("display.php");

?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addproduct.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <img src="products/img/pic.jpg" style="width: 60%; height:80%">
        </div>
        <div class="right" style="position: relative;top:-51rem;">
            <form action="admin.php" method="POST" enctype="multipart/form-data">
                <label for="title">Product Title</label><br>
                <input type="text" id="t" class="title" name="title"><br>

                <label for="img">Image upload</label><br>
                <input type="file" id="image" class="img" name="file"><br>

                <label for="title">Item Description</label><br>
                <textarea rows="4" cols="50" name="com">
                </textarea>
                <br>

                <label for="size" >Choose a Size:</label>
                <select name="siz" id="cars" style="position: 'relative';top:10px;">
                    <option value="xs-24-25">XS-24”-25”</option>
                    <option value="s-26-27">S-26”-27”</option>
                    <option value="M-28-29">M-28”-29”</option>
                    <option value="L-30-32">L-30.5”-32</option>
                </select><br><br>

                <label for="tname" >Shirt-Type:</label>
                <select name="t_name" id="t-name" style="position: 'relative';top:10px;">
                    <option value="casualshirt">Casual shirt</option>
                    <option value="fomalshirt">fomal shirt</option>
                    <option value="Tshirt">T-shirt</option>
                </select><br><br>

                <label for="price">Price</label><br>
                <input type="number" id="price" class="price" name="price"><br>
                

                <button type="submit" name="submit" class="btn">Add</button>
            </form>
        </div>
    </div>
</body>
</html>
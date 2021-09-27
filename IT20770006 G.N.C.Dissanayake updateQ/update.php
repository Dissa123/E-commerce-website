<?php 
require_once('connection.php');
$result = mysqli_query($connection,"SELECT * FROM user_details");

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
    <?php 
    if (mysqli_num_rows($result) > 0) {
        ?>
<table>
    <tr>
        <td>s1 No</td>
            <td>first_name</td>
            <td>last_name</td>
            <td>Email</td>
            <td>phone_number</td>
    
    </tr>
        <?php
        $i=0;
        while ($row = mysqli_fetch_array($result)) {
            ?>
    <tr>
        <td><?php echo $row["user_id"]; ?></td>
                <td><?php echo $row["first_name"]?></td>
                <td><?php echo $row["last_name"]?></td>
                <td><?php echo $row["Email"]?></td>
                <td><?php echo $row["last_login"]?></td>
                <td><a href="update-process.php?user_id=<?php echo $row["user_id"]; ?>">Update</a></td>
    </tr>   
            <?php
            $i++;
        } ?>
</table>
<?php
}
else{
    echo "No result Found";
}
?>
</body>
</html>
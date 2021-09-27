<?php 
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'boys_database';

    $connection = mysqli_connect('localhost','root','','boys_database');

    //Checking the connection
    if(mysqli_connect_errno()){
        die('database connection failed' . mysqli_connect_error());
    }else{
       
    }
?>
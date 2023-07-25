<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'crud_operation';

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        echo "Connection Failed!";
    }
?>
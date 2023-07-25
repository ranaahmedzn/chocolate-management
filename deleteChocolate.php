<?php
    include 'connection.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM crud WHERE id=$id";
        
        if (mysqli_query($conn, $sql)) {
            header('location:displayChocolate.php');
        }
    }
?>
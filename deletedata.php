<?php
    include 'connection.php';
    if (isset($_GET['delete_data'])) {
        $id = $_GET['delete_data'];
        
        $query = "DELETE FROM crud WHERE ID=$id";
        mysqli_query($connection, $query);
        
        header('Location:index.php');
        exit;
    }
?>
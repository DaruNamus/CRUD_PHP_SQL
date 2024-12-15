<?php
    $edit_data = null;
    if (isset($_GET['edit_data'])) {
        $id = $_GET['edit_data'];
        $query = "SELECT * FROM crud WHERE ID=$id";
        include 'connection.php';
        $result = mysqli_query($connection, $query);
        $edit_data = mysqli_fetch_assoc($result);
        header('Location:edit.php');
    }
?>
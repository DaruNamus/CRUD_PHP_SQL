<?php     
        if (isset($_POST['add_data'])) {
            $ID = $_POST['ID'];
            $nama = $_POST['Nama'];
            $kota = $_POST['Kota'];
            
            $query = "INSERT INTO crud (ID, Nama, Kota) VALUES ('$ID', '$nama', '$kota')";
            include "connection.php";
            mysqli_query($connection, $query);
            header('Location:index.php');
            exit;
        } ?>

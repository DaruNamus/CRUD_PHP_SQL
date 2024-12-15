<?php

include 'connection.php';

$id = $_POST['ID'];
$nama = $_POST['Nama'];
$kota = $_POST['Kota'];

$query = "UPDATE `crud` SET `ID`='$id',`Nama`='$nama',`Kota`='$kota' WHERE ID=$id";
mysqli_query($connection,$query);

header("location:index.php");
?>
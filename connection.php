<?php

$connection = mysqli_connect("localhost","root","","tugas");

//Check connection
if (mysqli_connect_errno()){
    echo "Koneksi gagal " .
    mysqli_connect_error(); 
}

?>
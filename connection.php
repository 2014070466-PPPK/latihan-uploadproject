<?php

$connection = mysqli_connect("localhost", "root", "mysql", "regis");

//cek koneksi
if(mysqli_connect_error()){
    echo "koneksi database gagal" . mysqli_connect_error();
}


?>
<?php
$namaHost = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($namaHost, $username, $password);

if ($connect) {
    echo "Koneksi dengan MYSQL Berhasil<br>";
} else {
    echo "Koneksi dengan MYSQL GAGAL" . mysqli_connect_error();
}

$sql = "CREATE DATABASE praktikumdb";
if (mysqli_query($connect, $sql)) {
    echo "Database Berhasil Dibuat<br>";
} else {
    echo "Database Gagal Dibuat <br>" . mysqli_error($connect);
}

mysqli_close($connect);
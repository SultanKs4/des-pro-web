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
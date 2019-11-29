<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "praktikumdb";

$connect = mysqli_connect($namaHost, $username, $password, $database);

if ($connect) {
    echo "Koneksi dengan MYSQL berhasil<br>";
} else {
    echo "Koneksi dengan MYSQL gagal" . mysqli_connect_error();
}

$sql = "INSERT INTO mahasiswa(id,nama,alamat)
VALUES('0001','George','malang'),('0002','Charlotte','malang'),('0003','Louis','surabaya')";

if (mysqli_query($connect, $sql)) {
    echo "Record Berhasil Ditambahkan<br>";
} else {
    echo "Database Gagal Dibuat <br>" . mysqli_error($connect);
}

mysqli_close($connect);
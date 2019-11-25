<?php
include "koneksi.php";

$id = $_GET['id'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

$query = "update mahasiswa set nama='$nama',alamat='$alamat' where id='$id'";
$result = mysqli_query($connect, $query);

if ($result) {
    echo "Berhasil update data ke database";
    ?>
    <a href="homeCRUD.php">Lihat data di tabel</a>
<?php
} else {
    echo "Gagal update data" . mysqli_error($connect);
}
?>
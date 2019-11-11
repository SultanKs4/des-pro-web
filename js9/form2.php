<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 2</title>
    <style>
    .error {
        color: #ff0000;
    }
    </style>
</head>

<body>
    <?php
    //ambil nilai variabel error
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    } else {
        $error = "";
    }

    //siapkan pesan kesalahan
    $pesan = "";
    if ($error == "variabel_belum_diset") {
        $pesan = "Anda harus mengakses halaman ini dari form2.php";
    } else if ($error == "nama_kosong") {
        $pesan = "nama harus diisi";
    } else if ($error == "email_kosong") {
        $pesan = "email harus diisi";
    }

    //siapkan isian form jika terjadi kesalahan
    if (isset($_GET['nama']) and isset($_GET['email']) and isset($_GET['komentar'])) {
        $nama = $_GET['nama'];
        $email = $_GET['email'];
        $komentar = $_GET['komentar'];
    } else {
        $nama = "";
        $email = "";
        $komentar = "";
    }
    ?>
    <span class="error"><?php echo $pesan; ?></span>
    <table>
        <form action="prosesForm2.php" method="GET">
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Komentar : </td>
                <td><textarea name="komentar" rows="5" cols="40"><?php echo $komentar; ?></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Kirim"></td>
            </tr>
        </form>
    </table>
</body>

</html>
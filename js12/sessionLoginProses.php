<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "select * from user where username='$username' and password='$password'";
$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    ?>
Anda Berhasil Login, silahkan menuju
<a href="homeSession.php">Halaman Home</a>
<?php
} else {
    ?>
Gagal Login, silahkan login lagi
<a href="sessionLoginForm.html">Halaman Login</a>
<?php
    echo mysqli_error($connect);
}
?>
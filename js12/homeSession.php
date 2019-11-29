<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <?php
    session_start();

    if ($_SESSION['status'] == 'login') {
        echo "Selamat datang " . $_SESSION['username'];
        ?>
    <br><a href="sessionLogout.php">Log Out</a>
    <?php
    } else {
        echo "Anda belum login. silahkan "
        ?>
    <a href="sessionFormLogin.php">Log in</a>
    <?php
    }
    ?>
</body>

</html>
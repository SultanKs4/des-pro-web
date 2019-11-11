<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Soal 1 Get Action</title>
</head>

<body>
    <?php
    // echo "Welcome " . $_GET["username"] . "!<br>";
    // echo "Your email address is : " . $_GET["email"];
    if (isset($_GET["username"]) and isset($_GET["email"])) {
        echo "Welcome " . $_GET["username"] . "!<br>";
        echo "Your email address is : " . $_GET["email"];
    } else {
        echo "Maaf anda harus mengakses halaman ini dari form1.html";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String 2</title>
</head>

<body>
    <?php
    $numberedString = "12345678901234567890234567890";
    $fivePos = strpos($numberedString, "5");
    echo "Posisi angka 5 didalam string dalam $fivePos";
    $fivePos2 = strpos($numberedString, "5", $fivePos + 1);
    echo "<br>Posisi angka 5 yang kedua didalam string adalah 
            $fivePos2";
    ?>
</body>

</html>
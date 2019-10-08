<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konstanta</title>
</head>

<body>
    <?php
    $var = "Ini adalah contoh variabel";
    echo $var;
    echo "<br><br>";
    // define("konstanta", "Ini adalah contoh konstanta");
    define("konstanta", "Ini adalah contoh konstanta", true);
    echo konstanta;
    echo "<br><br>";
    echo KONSTANTA;
    ?>
</body>

</html>
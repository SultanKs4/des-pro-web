<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perulangan PHP</title>
</head>

<body>
    <?php
    for ($i = 0; $i < 10; $i++) {
        $hasilKali = 10 * $i;
        echo "Hasil perkalian dari 10 x $i adalah $hasilKali <br>";
    }
    ?>
</body>

</html>
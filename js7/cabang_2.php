<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percabangan PHP</title>
</head>

<body>
    <?php
    $bilangan = 4;

    if ($bilangan % 2 == 0) {
        echo "Bilangan genap";
    } else {
        echo "Bilangan ganjil";
    }
    ?>
</body>

</html>
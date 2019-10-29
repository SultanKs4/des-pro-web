<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array 6</title>
</head>

<body>
    <h2>Fungsi Count()</h2>
    <?php
    $menu = array("rawon", "sate", "nasi goreng");
    $arrLength = count($menu);

    echo "Menu hari ini adalah : <br>";
    for ($x = 0; $x < $arrLength; $x++) {
        echo $menu[$x] . "<br>";
    }
    echo "<br>Saya Lapar, saya ingin makan " . "<b>$menu[2]</b>";
    ?>
</body>

</html>
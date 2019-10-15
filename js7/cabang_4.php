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
    $tujuan = "Malang";

    echo "Mau main kemana? " . $tujuan . "<br>";
    echo "<br> Pesan: ";

    switch ($tujuan) {
        case "Batu":
            echo "<b>Jangan lupa bawa jaket</b>";
            break;
        case "Bandung":
            echo "<b>Awas kalau belanja laper mata</b>";
            break;
        case "Bali":
            echo "<b>Pakai sunblock SPF 50</b>";
            break;
        default:
            echo "<b>Ya udah belajar aja</b>";
            break;
    }
    ?>
</body>

</html>
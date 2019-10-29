<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $langganan = $_POST['langganan'];
    $jumlahLembar = $_POST['jumlahLembar'];
    echo "<b>Rincian Harga</b><hr><br>";
    echo "Status Langganan: " . $langganan . "<br>";
    echo "Jumlah Lembar : " . $jumlahLembar . "<br>";

    if ($langganan == "Langganan") {
        $lembarHarga = 190;
        $totalHarga = $jumlahLembar * $lembarHarga;
        echo "Total Harga : " . $totalHarga . "<br>";
    } else if ($langganan == "Tidak Langganan") {
        if ($jumlahLembar < 150) {
            $lembarHarga = 300;
        } else if ($jumlahLembar >= 150) {
            $lembarHarga = 250;
        }
        $totalHarga = $jumlahLembar * $lembarHarga;
        echo "Total Harga : " . $totalHarga . "<br>";
    }
    ?><br>
    <a href="2.html"><button>Back to Tugas 2</button></a>
</body>

</html>
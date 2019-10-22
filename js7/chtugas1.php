<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <script>
    function back() {
        alert("Anda akan diredirect ke halaman utama");
        location.href = 'tugas1.html';
    }
    </script>
</head>

<body>
    <?php
    if (isset($_POST['kirim'])) {
        $kode = $_POST['nama'];
        switch ($kode) {
            case "A":
                echo "Menu Pilihan Anda : <br>";
                echo "Soto";
                break;
            case "B":
                echo "Menu Pilihan Anda : <br>";
                echo "Rawon";
                break;
            case "C":
                echo "Menu Pilihan Anda : <br>";
                echo "Bakso";
                break;
            case "D":
                echo "Menu Pilihan Anda : <br>";
                echo "Goda-Goda";
                break;
            case "E":
                echo "Menu Pilihan Anda : <br>";
                echo "Sempol";
                break;
            default:
                echo "Maaf menu mu tidak ada";
        }
    } else {
        exit();
    }
    echo '<br><br>
    <b>Apakah anda ingin memesan lagi ? (Y / N )</b>
    <form method="GET">
        <input type="submit" name="send" value="Y">
    </form>
    <form method="GET">
        <input type="submit" name="send2" value="N">
    </form>';
    $valid = null;
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['send'])) {
            $valid = 'Y';
        } elseif (isset($_GET['send2'])) {
            $valid = 'N';
        }
    }
    if ($valid == 'Y') {
        echo '<script>back()</script>';
    }
    ?>
</body>

</html>
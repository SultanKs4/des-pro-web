<!DOCTYPE html>
<html>

<head>
    <title></title>
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




    ?>
    <br />
    <br />

    <b>Apakah anda ingin memesan lagi ? (Y / N )</b>
    <form action="tugas1.php" method="post">
        <input type="submit" name="kirim" value=" Y ">
    </form>
    <form action="exit.php" method="post">
        <input type="submit" name="kirim" value=" N ">
    </form>
</body>

</html>
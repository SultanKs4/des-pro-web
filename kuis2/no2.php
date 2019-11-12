<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="assets/js/jquery-3.4.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Soal 2</title>
</head>

<body>
    <header>
        <nav id="webBrand" class="navbar-dark bg-dark" style="padding-left: 16px;">
            <a href="#" class="navbar-brand">
                <img src="img/profile.png" alt="profilelogo" width="30px" height="30px"> Sultan Kuis 2</a>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="no1.php" class="nav-link">Soal 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="no2.php" class="nav-link active">Soal 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="no3.php" class="nav-link">Soal 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="no4.php" class="nav-link">Soal 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="no5.php" class="nav-link">Soal 5</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid p-3">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Rumus Volume Matematika</h2>
                    <div style="margin-left: 42%; margin-right: auto;">
                        <?php
                        function CheckRumus($rumus)
                        {
                            if ($rumus == "A") {
                                ?>
                        <p>Memilih Volume Balok! <br><br></p>
                        <form action='' method='get'>
                            <label for="panjang">Panjang : </label>
                            <input type='text' name='panjang' id='panjang'><br><br>
                            <label for="lebar">Lebar : </label>
                            <input type='text' name='lebar' id='lebar'><br><br>
                            <label for="lebar">Tinggi : </label>
                            <input type='text' name='tinggi' id='tinggi'><br><br>
                            <button type="submit" name="hitung">Hitung</button><br><br>
                            <input type='hidden' name='checker' value='balok'>
                        </form>
                        <?php
                                } elseif ($rumus == "B") {
                                    ?>
                        <p>Memilih Volume Kubus! <br><br></p>
                        <form action='' method='get'>
                            <label for="sisi">Sisi :</label>
                            <input type='text' name='sisi' id="sisi"><br><br>
                            <button type="submit" name="hitung">Hitung</button><br><br>
                            <input type='hidden' name='checker' value='kubus'>
                        </form>
                        <?php
                                } elseif ($rumus == "C") {
                                    ?>
                        <p>Memilih Volume Bola! <br><br></p>
                        <form action='' method='get'>
                            Jari jari : <input type='text' name='jari'><br><br>
                            <button type="submit" name="hitung">Hitung</button><br><br>
                            <input type='hidden' name='checker' value='bola'>
                        </form>
                        <?php
                                }
                            }

                            function YesorNo()
                            {
                                echo "<br><br>Ulangi? <a href='no2.php'>Y</a> / <a href='no1.php'>N</a>";
                            }

                            function VolBalokExecute(float $panjang, float $lebar, float $tinggi)
                            {
                                return $panjang * $lebar * $tinggi;
                            }
                            function VolKubusExecute(float $sisi)
                            {
                                return pow($sisi, 3);
                            }
                            function VolBolaExecute(float $jari)
                            {
                                return 4 / 3 * 3.14 * pow($jari, 3);
                            }

                            if (isset($_POST['submit'])) {
                                $choice = $_POST['rumus'];
                                CheckRumus($choice);
                            } else if (isset($_GET['hitung'])) {
                                $checker = $_GET['checker'];
                                if ($checker == "balok") {
                                    $panjang = $_GET['panjang'];
                                    $lebar = $_GET['lebar'];
                                    $tinggi = $_GET['tinggi'];
                                    echo ("Volume Balok = " . VolBalokExecute($panjang, $lebar, $tinggi));
                                } elseif ($checker == "kubus") {
                                    $sisi = $_GET['sisi'];
                                    echo ("Volume Kubus = " . VolKubusExecute($sisi));
                                } elseif ($checker == "bola") {
                                    $jari = $_GET['jari'];
                                    echo ("Volume Bola = " . VolBolaExecute($jari));
                                }
                                YesorNo();
                            } else {
                                ?>
                        <form action="" method="post">
                            <p>Pilih salah satu list dibawah ini <br> A. Volume Balok <br> B. Volume Kubus <br> C.
                                Volume Bola</p>
                            <label for="rumus">Pilihan</label>
                            <input type="text" name="rumus" id="rumus" placeholder="A/B/C"><br><br>
                            <button type="submit" name="submit">Pilih</button><br><br>
                        </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
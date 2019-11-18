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
                    <div class="text-center">
                        <div class="d-inline-block">
                            <?php
                            if (isset($_POST['submit'])) {
                                $choice = $_POST['rumus'];
                                CheckRumus($choice);
                            } else if (isset($_GET['hitung'])) {
                                $checker = $_GET['checker'];
                                CheckRumus($checker);
                                if ($checker == "A") {
                                    $panjang = $_GET['panjang'];
                                    $lebar = $_GET['lebar'];
                                    $tinggi = $_GET['tinggi'];
                                    echo ("Volume Balok = " . VolBalokExecute($panjang, $lebar, $tinggi) . " cm&sup3;");
                                } elseif ($checker == "B") {
                                    $sisi = $_GET['sisi'];
                                    echo ("Volume Kubus = " . VolKubusExecute($sisi) . " cm&sup3;");
                                } elseif ($checker == "C") {
                                    $jari = $_GET['jari'];
                                    echo ("Volume Bola = " . VolBolaExecute($jari) . " cm&sup3;");
                                }
                                YesorNo();
                            } else {
                                header('Location: no2.php');
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

                            function CheckRumus($rumus)
                            {
                                if ($rumus == "A") {
                                    ?>
                            <p>Memilih Volume Balok! <br><br></p>
                            <form action='' method='get' class="pl-1">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="panjang">Panjang</label>
                                        </td>
                                        <td>
                                            <input type='text' name='panjang' id='panjang' size="5">
                                        </td>
                                        <td>cm</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="lebar">Lebar</label>
                                        </td>
                                        <td>
                                            <input type='text' name='lebar' id='lebar' size="5">
                                        </td>
                                        <td>cm</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="lebar">Tinggi</label>
                                        </td>
                                        <td>
                                            <input type='text' name='tinggi' id='tinggi' size="5">
                                        </td>
                                        <td>cm</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><button type="submit" name="hitung"
                                                class="btn btn-success">Hitung</button>
                                        </td>
                                    </tr>
                                    <input type='hidden' name='checker' value='A'>
                                </table>
                                <br>
                            </form>
                            <?php
                                    } elseif ($rumus == "B") {
                                        ?>
                            <p>Memilih Volume Kubus! <br><br></p>
                            <form action='' method='get' class="pl-4">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="sisi">Sisi</label>
                                        </td>
                                        <td>
                                            <input type='text' name='sisi' id="sisi" size="5">
                                        </td>
                                        <td>cm</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><button type="submit" name="hitung"
                                                class="btn btn-success">Hitung</button>
                                        </td>
                                    </tr>
                                    <input type='hidden' name='checker' value='B'>
                                </table>
                                <br>
                            </form>
                            <?php
                                    } elseif ($rumus == "C") {
                                        ?>
                            <p>Memilih Volume Bola! <br><br></p>
                            <form action='' method='get' class="pl-2">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="jari"> Jari jari :</label>
                                        </td>
                                        <td>
                                            <input type='text' name='jari' id="jari" size="5">
                                        </td>
                                        <td>cm</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><button type="submit" name="hitung"
                                                class="btn btn-success">Hitung</button>
                                        </td>
                                    </tr>
                                    <input type='hidden' name='checker' value='C'>
                                </table>
                                <br>
                            </form>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#273036" fill-opacity="0.9"
                d="M0,192L120,197.3C240,203,480,213,720,218.7C960,224,1200,224,1320,224L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
            </path>
        </svg>
    </footer>
</body>

</html>
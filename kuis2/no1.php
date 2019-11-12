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
    <title>Soal 1</title>
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
                        <a href="no1.php" class="nav-link active">Soal 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="no2.php" class="nav-link">Soal 2</a>
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
                    <h2 class="text-center">Multidimensional Array</h2>
                    <table border="1" class="ml-auto mr-auto">
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Barang</th>
                            <th>Tanggal</th>
                            <th>Harga</th>
                        </tr>
                        <?php
                        $Pembeli = array(
                            array("1", "Anton", "Televisi", "07 September 2016", "2.500.000"),
                            array("2", "Bryan", "Mesin Cuci", "10 Juli 2016", "1.500.000"),
                            array("", "Cherly", "Dispenser", "", "950.000"),
                            array("4", "Dean", "Kulkas", "15 September 2016", "1.750.000"),
                            array("5", "", "", "11 Oktober 2016", "450.000")
                        );
                        echo "<tr>";
                        echo "<td>" . $Pembeli[0][0] . "</td>";
                        echo "<td>" . $Pembeli[0][1] . "</td>";
                        echo "<td>" . $Pembeli[0][2] . "</td>";
                        echo "<td>" . $Pembeli[0][3] . "</td>";
                        echo "<td>" . $Pembeli[0][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[1][0] . "</td>";
                        echo "<td>" . $Pembeli[1][1] . "</td>";
                        echo "<td>" . $Pembeli[1][2] . "</td>";
                        echo "<td>" . $Pembeli[1][3] . "</td>";
                        echo "<td>" . $Pembeli[1][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[2][0] . "</td>";
                        echo "<td>" . $Pembeli[2][1] . "</td>";
                        echo "<td>" . $Pembeli[2][2] . "</td>";
                        echo "<td>" . $Pembeli[2][3] . "</td>";
                        echo "<td>" . $Pembeli[2][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[3][0] . "</td>";
                        echo "<td>" . $Pembeli[3][1] . "</td>";
                        echo "<td>" . $Pembeli[3][2] . "</td>";
                        echo "<td>" . $Pembeli[3][3] . "</td>";
                        echo "<td>" . $Pembeli[3][4] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . $Pembeli[4][0] . "</td>";
                        echo "<td>" . $Pembeli[4][1] . "</td>";
                        echo "<td>" . $Pembeli[4][2] . "</td>";
                        echo "<td>" . $Pembeli[4][3] . "</td>";
                        echo "<td>" . $Pembeli[4][4] . "</td>";
                        echo "</tr>";
                        ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
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
    <title>Soal 5 Action</title>
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
                        <a href="no2.php" class="nav-link">Soal 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="no3.php" class="nav-link">Soal 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="no4.php" class="nav-link">Soal 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="no5.php" class="nav-link active">Soal 5</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid p-3">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">SP-FKPPM Registration</h2>
                    <?php
                    if (isset($_POST['simpan'])) {
                        $nama = $_POST['nama'];
                        $nokerja = $_POST['nokerja'];
                        $mobile = $_POST['mobile'];
                        $home = $_POST['home'];
                        $office = $_POST['office'];
                        $unit = $_POST['unit'];
                        $departement = $_POST['departement'];
                        $ttl = $_POST['ttl'];
                        $alamat = $_POST['postalAddress'];
                        echo "<h2><b>Information User</b><hr></h2><br>";
                        $target_path = "img/uploads/";
                        $target_path = $target_path . basename(
                            $_FILES['uploadedfile']['name']
                        );

                        if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
                            $image = $_FILES["uploadedfile"]["name"];
                            $img = "img/uploads/" . $image;
                            echo "<center><img style='width:300px;height:400px;border:1px solid black;' src=\"$img\"><br><br></center>";
                        } else {
                            echo "There was an error during uploading the file, please try again<br>";
                        }
                        echo "Name : " . $nama . "<br>";
                        echo "No Kerja: " . $nokerja . "<br>";
                        echo "No Telpon HP: " . $mobile . "<br>";
                        echo "No Telp Rumah: " . $home . "<br>";
                        echo "No Telp Kantor : " . $office . "<br>";
                        echo "Unit : " . $unit . "<br>";
                        echo "Departement : " . $departement . "<br>";
                        echo "Tempat Tanggal Lahir : " . $ttl . "<br>";
                        echo "Alamat : " . $alamat . "<br>";
                        ?><br>
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Yang tertanda pada biodata diatas: </h4>
                        <p>Dengan secara sukarela, demokratis dan penuh kesadaran menyatakan diri sebagai Anggota
                            Serikat Pekerja Forum Komunikasi Jasa Penunjang Migas di PT. Badak NGL (SP-FKKPM) dengan
                            ketentuan sebagai berikut : </p>
                        <hr>
                        <p class="mb-0">
                            <ul>
                                <li>Mematuhi dan mentaati Anggaran Dasar, Anggaran Rumah Tangga dan Peraturan Organisasi
                                </li>
                                <li>Membela dan menunjang tinggi nama baik organisasi</li>
                                <li>Membayar uang iuran Rp.5000/Bulan</li>
                            </ul>
                        </p>
                    </div>
                    <?php
                    } else {
                        echo ("Data kosong");
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>
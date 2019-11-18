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
    <title>Soal 5</title>
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
                    <div class="container-fluid p-2">
                        <div class="row">
                            <div class="col-sm-6 ml-auto mr-auto">
                                <form class="form-horizontal" enctype="multipart/form-data" method="POST"
                                    action="no5act.php">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="nama">Nama Anda</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="nama" id="nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="nokerja">No Pekerja</label>
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" id="nokerja" name="nokerja"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="mobile">No Telepon HP</label>
                                        <div class="col-sm-12">
                                            <input type="tel" class="form-control" id="mobile" name="mobile" min="0"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="home">No Telepon
                                            Rumah</label>
                                        <div class="col-sm-12">
                                            <input type="tel" class="form-control" id="home" name="home" min="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="office">No Telepon
                                            Kantor</label>
                                        <div class="col-sm-12">
                                            <input type="tel" class="form-control" id="office" min="0" name="office">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="unit">Unit</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="unit" name="unit" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="departement">Departement</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="departement" name="departement"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-5" for="ttl">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="ttl" name="ttl" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="alamat">Alamat</label>
                                        <div class="col-sm-12">
                                            <textarea style="height: 60px; width: 610px;" name="postalAddress"
                                                id="postal" placeholder="PostalAddress"></textarea><br>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <label class="control-label" for="foto">Upload Foto</label>
                                        <input type="file" name="uploadedfile" required id="foto">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-info ml-3" value="Simpan"
                                        name="simpan">Simpan</button>
                                    <button type="reset" class="btn btn-danger ml-2" value="Reset">Reset</button>
                                </form>
                            </div>
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
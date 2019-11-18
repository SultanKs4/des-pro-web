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
                        <div class="text-left d-inline-block">
                            <form action="no2math.php" method="post">
                                <p>Pilih salah satu list dibawah ini <br> A. Volume Balok <br> B. Volume Kubus <br> C.
                                    Volume Bola</p>
                                <label for="rumus">Pilihan</label>
                                <input type="text" name="rumus" id="rumus" placeholder="A/B/C" size="3"><br><br>
                                <button type="submit" class="btn btn-success" name="submit">Pilih</button><br><br>
                            </form>
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
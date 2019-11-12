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
    <title>Soal 3</title>
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
                        <a href="no3.php" class="nav-link active">Soal 3</a>
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
                    <h2 class="text-center">Form Soal 3 Hasil</h2>
                    <?php
                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $email2 = $_POST['email2'];
                        $countryCode = $_POST['countryCode'];
                        $cityCode = $_POST['cityCode'];
                        $phoneNumber = $_POST['phoneNumber'];
                        $mobilePhoneNumber = $_POST['mobilePhoneNumber'];
                        $postalAddress = $_POST['postalAddress'];
                        $myList = $_POST['myList'];
                        $password = $_POST['password'];
                        $password2 = $_POST['password2'];

                        echo "Name : " . $name . "<br>";
                        echo "Email : " . $email . "<br>";
                        echo "Alternate Email: " . $email2 . "<br>";
                        echo "Country Code: " . $countryCode . "<br>";
                        echo "City Code : " . $cityCode . "<br>";
                        echo "Phone Number : " . $phoneNumber . "<br>";
                        echo "Mobile Phone Number : " . $mobilePhoneNumber . "<br>";
                        echo "Postal Address : " . $postalAddress . "<br>";
                        echo "Country : " . $myList . "<br>";
                        echo "Password : " . $password . "<br>";
                    } else {
                        echo ("Tidak ada data");
                    }
                    ?><br>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
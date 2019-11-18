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
                    <div class="text-center">
                        <div class="d-inline-block text-left">
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

                                if ($myList == "null") {
                                    header('Location: no3SignUp.php?error=country_invalid');
                                } elseif (!preg_match("/^[0-9+]*$/", $mobilePhoneNumber)) {
                                    header('Location: no3SignUp.php?error=mobile_invalid');
                                }
                                ?>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo ($name); ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo ($email); ?></td>
                                </tr>
                                <tr>
                                    <td>Alternate Email </td>
                                    <td><?php echo ($email2); ?></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td colspan="3"><?php echo ($countryCode . " " . $cityCode . " " . $phoneNumber); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mobile Phone</td>
                                    <td><?php echo ($mobilePhoneNumber); ?></td>
                                </tr>
                                <tr>
                                    <td>Postal Address</td>
                                    <td><?php echo ($postalAddress); ?></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td><?php echo ($myList); ?></td>
                                </tr>
                            </table>
                            <?php
                            } else {
                                echo ("Tidak ada data");
                            }
                            ?><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer fixed-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#273036" fill-opacity="0.9"
                d="M0,192L120,197.3C240,203,480,213,720,218.7C960,224,1200,224,1320,224L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
            </path>
        </svg>
    </footer>
</body>

</html>
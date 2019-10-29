<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Tugas 3</title>
</head>

<body>
    <header>
        <nav id="webBrand" class="navbar-dark bg-dark" style="padding-left: 16px;">
            <a href="tugas1.php" class="navbar-brand">
                <img src="profile.png" alt="profilelogo" width="30px" height="30px"> Sultan Tugas JS8</a>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="tugas1.php" class="nav-link">Tugas 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="tugas2.php" class="nav-link">Tugas 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="tugas3.php" class="nav-link">Tugas 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/SultanKs4" class="nav-link" target="_blank">My GitHub</a>
                    </li>
                </ul>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Tugas 3</h2>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        $total = 1;
                        echo "1*";
                        for ($x = 1; $x < 4; $x++) {
                            $total = $total + 2.5;
                            echo "$total*";
                        }
                        echo "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid bg-secondary ml-auto mr-auto p-3 m-2" style="color: whitesmoke;">
            <div class="row">
                <div class="col-sm-12 text-center"><b>&copy;2019 Sultan Achmad Qum Masykuro NS</b></div>
            </div>
        </div>
    </footer>
</body>

</html>
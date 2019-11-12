<?php
session_start();
if (isset($_POST['save'])) {
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["password"] = $_POST['password'];
}
?>
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
                    <h2 class="text-center">Form Soal 3</h2>
                    <form action="no3act.php" method="post">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" required placeholder="Sultan Achmad Qum"><br><br>
                        <label for="email">Email ID:</label>
                        <input type="email" placeholder="sultangendut@gmail.com" id="email" name="email"
                            required><br><br>
                        <label for="email2">Alternate Email ID: </label>
                        <input type="email" placeholder="natlus@gmail.com" id="email2" name="email2"><br><br>
                        <label for="CountryCode">Phone:</label>
                        <input type="tel" placeholder="Country Code" name="countryCode" maxlength="4" min="0">
                        <input type="tel" placeholder="City Code" name="cityCode" min="0" maxlength="4">
                        <input type="tel" placeholder="Phone Number" name="phoneNumber" maxlength="7" min="0"><br><br>
                        <label for="mobile">Mobile Phone:</label>
                        <input type="tel" placeholder="087739491570" name="mobilePhoneNumber" id="mobile"><br><br>
                        <label for="postal">Your Postal Address :</label>
                        <textarea style="height: 60px; width: 200px;" name="postalAddress" id="postal"
                            placeholder="PostalAddress"></textarea><br><br>
                        <label for="myList">Country :</label>
                        <select id="myList" name="myList">
                            <option value="null">----Select One----</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="USA">USA</option>
                            <option value="Russia">Russia</option>
                        </select><br><br>
                        <label for="password">Password:</label>
                        <input type="password" name="password" type="password" id="password" required
                            placeholder="Str0ngP@ssW0rd!^@&"><br><br>
                        <label for="re-password">Re-Enter Password: </label>
                        <input type="password" name="re-password" type="password" id="re-password" required
                            oninput="check(this)" placeholder="Str0ngP@ssW0rd!^@&"><br><br>
                        <script language='javascript' type='text/javascript'>
                        function check(input) {
                            if (input.value != document.getElementById('password').value) {
                                input.setCustomValidity('Password Must be Matching.');
                            } else {
                                input.setCustomValidity('');
                            }
                        }
                        </script>
                        <input type="checkbox" name="agree" id="agree" required>I Accept the <a
                            href="http://polinema.ac.id">Terms of Use</a><br><br>
                        <button type="submit" name="submit" class="btn btn-info" value="Kirim"
                            onclick="onClick()">Continue</button>
                        <script type="text/javascript">
                        function onClick() {
                            alert("Apakah data sudah benar?");
                        }
                        </script>
                        <button type="reset" class="btn btn-danger" value="Reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
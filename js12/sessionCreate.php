<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Create</title>
</head>

<body>
    <?php
    $_SESSION["favcolor"] = "blue";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array 8</title>
</head>

<body>
    <h2>Sorting Array</h2>
    <?php
    $age = array(
        "Joe" => "29",
        "Elsa" => "27",
        "Kevin" => "32",
        "Nick" => "24",
        "Olaf" => "9",
        "Ana" => "17",
    );

    // asort($age);
    rsort($age);
    // ksort($age);
    // arsort($age);
    // krsort($age);

    foreach ($age as $name => $value) {
        echo "name = " . $name . " age = " . $value . "<br>";
    }
    ?>
</body>

</html>
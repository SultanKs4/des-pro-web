<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Array 5</title>
</head>

<body>
    <h2>Multidimensional Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        $movie = array(
            array("CSI Cyber : Season 1", 2016, 8.9),
            array("The Avangers", 2012, 9.1),
            array("Guardian of the Galaxy", 2014, 8.1),
            array("Joker", 2019, 9.2)
        );
        echo "<tr>";
        echo "<td>" . $movie[0][0] . "</td>";
        echo "<td>" . $movie[1][1] . "</td>";
        echo "<td>" . $movie[2][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[1][0] . "</td>";
        echo "<td>" . $movie[1][1] . "</td>";
        echo "<td>" . $movie[1][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[2][0] . "</td>";
        echo "<td>" . $movie[2][1] . "</td>";
        echo "<td>" . $movie[2][2] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[3][0] . "</td>";
        echo "<td>" . $movie[3][1] . "</td>";
        echo "<td>" . $movie[3][2] . "</td>";
        echo "</tr>";
        ?>
</body>

</html>
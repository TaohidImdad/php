<?php 






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short</title>
</head>

<body>
    <?php
    const br = "<br>";

    $names = array("India" => "Dhilli", "Nepal" => "Kathmundu", "Pakistan" => "Islamabad", "England" => "London", "Vutan" => "Thimpu");

    foreach ($names as $name => $val) {
        echo "$name = $val <br>";
    }
    echo br;
    ksort($names);
    echo "<strong>Sorted Capital name</strong><br>";
    foreach ($names as  $name => $val) {
        echo "$name = $val <br>";
    }
    echo br;
    asort($names);
    echo "<strong>Sorted Capital name</strong><br>";
    foreach ($names as  $name => $val) {
        echo "$name = $val <br>";
    }




    ?>
</body>

</html>
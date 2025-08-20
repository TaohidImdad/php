<?php

const b = "<br>";


function process($mark)
{
    $sum = 0;
    $a = 0;
    foreach ($mark as  $value) {
        $sum += $value;
        $a++;
    }

    return $sum / $a;
}

$rohan = ["bangla" => 80, "english" => 90, "arabic" => 99];

$result = process($rohan);
echo ($result);
echo b;

$hello = [
    [1, 2, 3, 4, 5],
    [5, 4, 3, 2, 1],
    [9, 8, 7, 6, 5]
];

foreach ($hello as $value) {
    echo b;
    foreach ($value as $v) {
        echo $v;
    }
};

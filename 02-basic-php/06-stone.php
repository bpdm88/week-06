<?php

require __DIR__ . "/vendor/autoload.php";

function stone ($kilos) {
    return $kilos / 6.35029318;
}

dump(
    stone(74), // 11.65278
    stone(50), // 7.8735
);
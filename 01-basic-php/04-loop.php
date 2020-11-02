<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 1; $i <= 1000; $i += 1) {
    $current = $i;
    if ($current % 13 === 0) {
        dump($current);
    }
    };
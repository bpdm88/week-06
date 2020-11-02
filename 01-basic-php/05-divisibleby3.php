<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 1; $i <= 50; $i += 1) {

    $current = $i;
    if ($current % 2 === 0) {
        $even = $current;
        if ($even % 3 === 0) {
            dump($even);
        }
    }
}
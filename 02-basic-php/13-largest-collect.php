<?php

require __DIR__ . "/vendor/autoload.php";

function largest($numbers) {

$arr = collect($numbers);

return $arr->reduce(fn($largest, $value) => $largest > $value ? $largest : $value, $numbers[0]);
}

dump(
largest([2, 4, 6, 4, 7, 5]), // 7
largest([-2, 4, 6, 4, 2, -7, 5]), // 6
largest([-2, -4, -4, -7, -5]), // -2
);
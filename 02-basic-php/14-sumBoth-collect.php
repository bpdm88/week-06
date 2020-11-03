<?php

require __DIR__ . "/vendor/autoload.php";

function sumBoth($values1, $values2) {

$total1 = collect($values1);
$total2 = collect($values2);

$arr1 = $total1->reduce(fn($total, $val) => $total + $val, 0);
$arr2 = $total2->reduce(fn($total, $val) => $total + $val, 0);

return $arr1 + $arr2;
}

dump(
sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);
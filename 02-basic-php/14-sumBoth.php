<?php

require __DIR__ . "/vendor/autoload.php";

// function sumIt ($values) {

//     $total = 0;

//     foreach ($values as $value) {

//         $total += $value;
//     }

//     return $total;
// }

// function sumBoth($values1, $values2) {
//     $total1 = sumIt($values1);
//     $total2 = sumIt($values2);

//     return $total1 + $total2;
// }

// dump(
//     sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
//     sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
// );

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


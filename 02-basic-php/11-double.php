<?php

require __DIR__ . "/vendor/autoload.php";

// function double ($numbers) {

//     $arr = [];

//     foreach ($numbers as $num) {
//         $arr[] = $num * 2;
//     }

//     return $arr;
// }

dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);

function double($numbers) {
    
    $arr = collect($numbers);

    return $arr->map(fn($n) => $n * 2);
}


dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);
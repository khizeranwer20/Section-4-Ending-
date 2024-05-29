<?php

// function addition($num1 , $num2){

//     $result =$num1/$num2;
//     return $result;
// }

// echo addition(10,5);

$cars = [
    [
        'model' => 'honda', 
        'name' => 'civic',
        'year' => '2008',
        'horsepower' => '500hp',
    ],
    [
        'model' => 'KIA', 
        'name' => 'Sportage',
        'year' => '2005',
        'horsepower' => '350hp',
    ],
    [
        'model' => 'Toyota', 
        'name' => 'Sportage',
        'year' => '2005',
        'horsepower' => '350hp',
    ],
];

$filterbymodel = function ($cars, $model) {
    $filteredcars = [];

    foreach ($cars as $car) {
        if ($car['model'] === $model) {
            $filteredcars[] = $car;
        }           
    }
    return $filteredcars;
};

$modelToFilter = 'Toyota';
$filteredCars = $filterbymodel($cars, $modelToFilter);

print_r($filteredCars);

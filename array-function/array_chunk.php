<?php

$car = ["Volvo","BMW","Toyota","Honda","Mercedes","Opel", "Porscher"];

echo "<pre>";
print_r($car);

$newCar = array_chunk($car, 2);

echo "<pre>";
print_r($newCar);

echo $newCar[0][0];





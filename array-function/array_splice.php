<?php
$input = range(0,10);
array_splice($input, 5, 4, ["tung","Hoang"]);
 
echo "<pre>";
    print_r($input);
echo "</pre>";

foreach ($input as $key => $value) {
    echo $value . "<br>";
}
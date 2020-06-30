<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<body>

<?php
function test_odd($var)
  {
  if($var % 2 == 0) {
      return $var;
  } 
  }

$a1=array(1,3,2,3,4,4,9);
print_r(array_filter($a1,"test_odd"));

// $a = 111 & 1;
// echo $a;
?>

</body>
</html>

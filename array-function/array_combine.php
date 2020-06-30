<?php
$keys = array(
    'name', 'email', 'address', 'phone'
);
  
$value = array(
    'TheHalfHeart', 'TheHalfHeart@gmail.com', 'HCM CYTY', '0979 306 603'
);
  
echo '<pre>';
  
print_r(array_combine($keys, $value));
<?php
$myArr = [1, 2, 3, 4];
array_pop($myArr, 1,2);

array_push($myArr, 5, 8);
print_r($myArr); // [1, 2, 3, 4, 5, 8]

$myArr[] = -1;
print_r($myArr); // [1, 2, 3, 4, 5, 8, -1]
?>
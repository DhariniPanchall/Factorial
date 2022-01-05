<!DOCTYPE html>
<html>
<title>Swapping</title>
<body>

<?php

$temp = 0;
$a = 2;
$b = 4;

echo "Before swapping value of a is ".$a." and b is ".$b."!\n";

function swap($a, $b)
{
	$temp = $a;
    $a = $b;
    $b = $temp;
    echo nl2br("\nAfter swapping value of a is ".$a." and b is ".$b."!");
}
swap($a, $b);
?> 

</body>
</html>

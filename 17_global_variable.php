<?php
// Method 1
$x = 45;
$y = 5;
function sum(){
    global $x, $y;
    $sum = $x + $y;
    return $sum;
}
echo sum();

// Method 2
$a = 15;
$b = 5;
function test(){
    $GLOBALS['sum'] = $GLOBALS['a'] + $GLOBALS['b'];
    return $GLOBALS['sum'];
}
echo test();
?>
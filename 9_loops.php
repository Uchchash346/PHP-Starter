<?php
// While loop
$x = 1;
while($x <= 5){
    echo "The number is $x <br>";
    $x++;
}

echo "<br>";

// for loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo "<br>";

// foreach loop
$data = array('HTML', 'CSS', 'PHP', 'React');
foreach($data as $v)
{
    echo $v . "<br>";
}
?>
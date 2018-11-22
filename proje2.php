<?php
$a = $_GET["a"];
$b = $_GET["b"];
$f = $_GET["op"];

if ($f == 'add') { 
    $op = $a + $b;
}
elseif ($f == 'mul') { 
    $op = $a * $b;
}
elseif ($f == 'div') { 
    $op = $a / $b;
}
else { 
    $op = $a - $b;
}

echo "$a $f $b = $op";
?>

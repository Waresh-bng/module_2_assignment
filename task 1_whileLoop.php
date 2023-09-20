<?php
function evenNumberFunction($x, $y, $z) {
    $i = $x;
    while ($i <= $y) {
        echo $i . " ";
        $i += $z;
    }
}

// Call the function to print even numbers
evenNumberFunction(2, 20, 2);

?>
<?php
function evenNumberFunction($x, $y, $z) {
    $i = $x;
    do {
        echo $i . " ";
        $i += $z;
    } while ($i <= $y);
}

// Call the function to print even numbers
evenNumberFunction(2, 20, 2);

?>
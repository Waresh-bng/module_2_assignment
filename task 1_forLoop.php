<?php
function evenNumberFunction($x, $y, $z) {
    for ($i = $x; $i <= $y; $i += $z) {
        echo $i . " ";
    }
}

// Call the function to print even numbers
evenNumberFunction(2, 20, 2);

?>
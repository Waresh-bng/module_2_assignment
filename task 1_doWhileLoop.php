<?php
function evenNumberFunction($x, $y, $z) {
    $i = $x;
    if($i==1){
        $i=$i+1;
    }
    do {
        echo $i . " ";
        $i += $z;
    } while ($i <= $y);
}

// Call the function to print even numbers
evenNumberFunction(1, 20, 2);

?>
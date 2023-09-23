<?php
function evenNumberFunction($x, $y, $z) {
    $i = $x;
    if($i==1){
        $i=$i+1;
    }
    while ($i <= $y) {
        echo $i . " ";
        $i += $z;
    }
}

// Call the function to print even numbers
evenNumberFunction(1, 20, 2);

?>

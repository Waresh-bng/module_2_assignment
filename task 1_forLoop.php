<?php
function evenNumberFunction($x, $y, $z) {
    if($x==1){
        $x=$x+1;
    }
    for ($i = $x; $i <= $y; $i += $z) {
        echo $i . " ";
    }
}

// Call the function to print even numbers
evenNumberFunction(1, 20, 2);

?>
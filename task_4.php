<?php
function faboFunction($j){
$num1=0;
$num2=1;
$inHand=0;

for($i=1;$i<=$j;$i++){
        echo $num1 . PHP_EOL;
        $num1=$num1+$num2;
        $num2=$inHand;
        $inHand=$num1;
}
}
faboFunction(15);

?>
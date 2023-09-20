<?php
$num1=0;
$num2=1;
$inHand=0;

for($i=1;$i<=10;$i++){
    if($num1<=100){
        echo $num1 . PHP_EOL;
        $num1=$num1+$num2;
        $num2=$inHand;
        $inHand=$num1;
    }else{
        break;
    }
}
?>
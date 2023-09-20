<?php
// $i = 1;
// while ($i <= 10) {
//     if ($i == 5) {
//         break; // This will exit the while loop when $i equals 5
//     }
//     echo $i . " ";
//     $i++;
// }
// $j = 1;
// do {
//     if ($j % 2 == 0) {
//         continue; // This will skip even numbers in the do-while loop
//     }
//     echo $j . " ";
//     $j++;
// } while ($j <= 5);
$i=1;
for($i;$i<=50;$i++){
    if($i%5==0){
        continue;
    }
    echo $i;
}
?>
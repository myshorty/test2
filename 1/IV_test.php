<?php

$a = 1;
$ar = array(32, 56, 11, 73, 724, 67, 235, 22, 52, 15, 76, 0);

$cnt = count($ar);
for ($i = 0; $i = $cnt-1 ; $i++){
    if (strrpos($ar[$i], "2") !== false) {
        $cnt++;
        for ($j = $cnt - 1; $j > $i; $j--){
            $ar[$j] = $ar[$j-1];
        }
        $i++;
        $ar[$i] = $a;
    }
}

print_r($ar);

?>

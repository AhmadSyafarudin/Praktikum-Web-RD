<?php

function prima($n) {
    for ($i = 1; $i <= $n; $i++) {
        $x = 0;

        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $x++;
            }
        }

        if ($x == 2){
            echo "$i ";
        }
    }
}

prima(50);

?>
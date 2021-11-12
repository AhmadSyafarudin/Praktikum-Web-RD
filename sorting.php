<?php
   $listarray = ["larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"];
   $n = count($listarray);
   
   function sorting(&$listarray, $n) {
        for ($i = 1; $i < $n; $i++) {
            $temp = $listarray[$i];
            $j = $i - 1;

            while ($j >= 0 && $listarray[$j] > $temp) {
                $listarray[$j + 1] = $listarray[$j];
                $j -= 1;
            }

            $listarray[$j + 1] = $temp;
        }
   }

   sorting($listarray, count($listarray));
   foreach ($listarray as $list) {
       echo "$list ";
    }
?>
<?php
 function odwrocTablice($tablica) {
     $odwroconaTablica = array();
     for ($i =0; $i< count($tablica)/2; $i++) {
         $temp = $tablica[$i];
         $tablica[$i] = $tablica[count($tablica) - 1 - $i];
            $tablica[count($tablica) - 1 - $i] = $temp;
     }
     return $odwroconaTablica;
 }
$liczby = array(1, 2, 3, 4, 5,6,7,8,9);
odwrocTablice($liczby);
print_r($liczby);
?>
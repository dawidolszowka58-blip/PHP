<?php 
    function znajdzMin ($tablica) {
        $min_indeks = 0;
    for ($i = 1; $i<count($tablica);$i++) {
        if ($tablica[$i] < $tablica[$min_indeks]) {
              $min_indeks = $i;
        }
    }
    return $min_indeks; // Zwraca indeks znalezionego elementu
}
$tablica = array(1, 2, 3, 4, 5);
$indeks = znajdzMin($tablica);
echo "Najmniejsza liczba w tablicy to: $tablica[$indeks]";



?>
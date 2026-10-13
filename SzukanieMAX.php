<?php 
 //napisz funkcje ktora wyszuka najwiekszej liczby i zwroci jego indeks
function znajdzMax ($tablica){
    $max = $tablica[0];
    for ($i = 1; $i<count($tablica);$i++) {
        if ($tablica[$i] > $max) {
              $max = $tablica[$i];
        }
    }
    return $max; // Zwraca indeks znalezionego elementu
}
$tablica = array(1, 2, 3, 4, 5);
$indeks = znajdzMax($tablica);
echo "Największa liczba w tablicy to: $indeks";


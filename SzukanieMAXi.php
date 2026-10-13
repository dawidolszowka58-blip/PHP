<?php 
function znajdzMax ($tablica){
    $max_indeks = 0;
    for ($i = 1; $i<count($tablica);$i++) {
        if ($tablica[$i] > $tablica[$max_indeks]) {
              $max_indeks = $i;
        }
    }
    return $max_indeks; // Zwraca indeks znalezionego elementu
}
$tablica = array(1, 2, 3, 4, 5);
$indeks = znajdzMax($tablica);
echo "Największa liczba w tablicy to: $tablica[$indeks]";
?>

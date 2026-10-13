<?php
function znajdzElement ($tablica, $element) {
    for($i=0 ; $i<count($tablica) ; $i++) {
        if ($tablica[$i] === $element) {
            return $i; // Zwraca indeks znalezionego elementu
        }
    }
    return -1; // Zwraca -1, jeśli element nie został znaleziony
}
$tablica = array(1, 2, 3, 4, 5);
$elementDoZnalezienia = 3;
$indeks = znajdzElement($tablica, $elementDoZnalezienia);
if ($indeks != -1) {
    echo "Element $elementDoZnalezienia został znaleziony na indeksie: $indeks";
} else {
    echo "Element $elementDoZnalezienia nie został znaleziony w tablicy.";
}
?>

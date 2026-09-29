<?php
$array = array(
    array("banan", 10),
    array("arbuz", 5),
    array("jabłko", 4),
    array("truskawka", 20)
); // tablica z owocami i cenami
echo "Owoce w tablicy:<br>"; // wyświetlenie nagłówka
echo "<ul>"; // rozpoczęcie listy nie numerowanej
for ($i = 0; $i < count($array); $i++) { // pętla przechodząca przez wszystkie elementy tablicy
    echo "<li>" . $array[$i][0] . " " . $array[$i][1] . " zł</li>"; // wyświetlenie owocu i ceny
}
echo "</ul>"; // zakończenie listy nie numerowanej
?>
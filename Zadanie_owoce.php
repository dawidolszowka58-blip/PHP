<?php
$array = array("banan", "arbuz", "jabłko", "truskawka"); // tablica z owocami
echo "Owoce w tablicy:<br>"; // wyświetlenie nagłówka
echo "<ol>"; // rozpoczęcie listy numerowanej
for ($i = 0; $i < count($array); $i++) { // pętla for, która iteruje przez wszystkie elementy tablicy
    echo "<li>" . $array[$i] . "</li>"; // wyświetlenie każdego owocu w liście numerowanej
}
echo "</ol>"; // zakończenie listy numerowanej
?>
<?php
$array = array("banan"=>10, "arbuz"=>5, "jabłko"=>4, "truskawka"=>20);
echo "<table border='1'>";
foreach ($array as $owoc => $cena) {
    echo "<tr><td>$owoc</td><td>$cena zł</td></tr>";
}
echo "</table>";
?>

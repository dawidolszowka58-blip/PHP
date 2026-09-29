<?php
$liczba = 2;
$i = 0;
while ($i < 20) {
    echo "liczba ta to : " . $liczba . "<br>";

    for ($j = 0; $j < 1; $j++) {
        $liczba += 2;
    }

    $i++;
}
?>
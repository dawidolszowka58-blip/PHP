<?php 
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Kontynuowanie pętli, gdy $i jest równe 5
    echo "liczba: $i <br>";
        }
    echo "koniec pętli";   
}
?>
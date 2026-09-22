<p> Dodawanie elementów </p>
<?php 
    $a1 = array(0,1, 2, 3);       
    $a2 = array(6, 7);
    array_splice($a1, 2, 0, $a2);
    print_r($a1);
?>
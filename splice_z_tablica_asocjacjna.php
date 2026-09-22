<?php 
    $a1 = array("joe"=>1, "mary"=>2, "john"=>3);       
    $a2 = array(6, 7);
    array_splice($a1, 2, 0, $a2);
    print_r($a1);
?>
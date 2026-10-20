<?php 
    $myfile =fopen("Dawid_Olszówka.txt", "w")or die("Unable to open file!");
    $txt = "John Pork\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>
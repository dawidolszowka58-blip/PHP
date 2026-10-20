<?php 
    $myfile = fopen("Dawid_Olszówka.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("Dawid_Olszówka.txt"));
    fclose($myfile);
?>
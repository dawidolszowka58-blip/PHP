<?php 
$myfile = fopen("Dawid_Olszówka.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

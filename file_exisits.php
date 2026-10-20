<?php 
$filename = "static.php";
if (file_exists($filename)) {
   echo "Plik istnieje.";
} else {
    echo "Plik nie istnieje.";
}  
?>
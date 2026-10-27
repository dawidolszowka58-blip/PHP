<?php 
 $cookie_name = "user";
 if(!isset($_COOKIE[$cookie_name])) {
     setcookie($cookie_name, $cookie_value, $cookie_expire);
     echo "Ciasteczko o nazwie " . $cookie_name . " zostało utworzone!<br>";
 } else {
     echo "Ciasteczko o nazwie " . $cookie_name . " już istnieje!<br>";
     echo " Wartość ciasteczka: " . $_COOKIE[$cookie_name] . "<br>";
 }
 ?>
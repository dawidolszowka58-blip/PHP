<?php 
$cookie_name = "user";
setcookie($cookie_name, "" , time() - 3600); // usuwanie ciasteczka
if(!isset($_COOKIE[$cookie_name])) {
    echo "Ciasteczko o nazwie '" . $cookie_name . "' nie istnieje.";
} else {
    echo "Ciasteczko '" . $cookie_name . "' zostało usunięte.";
    echo "wartość ciasteczka: " . $_COOKIE[$cookie_name];

}
?> 
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br> 
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$servername = "localhost";
$username = "root"; // root
$password = ""; // ""
$database = "goetel2";
$conn = new mysqli($servername, $username, $password, $database);// create connection
if (!$conn) {// check connection
    die("Połaczenie niepoprawne: " . mysqli_connect_error());
}
echo "Połączono poprawnie";
$sql = "INSERT INTO MyGuests (firstname, email) VALUES ('$name', '$email')";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "Rekord dodany poprawnie";
} else {
    echo "Błąd podczas dodawania rekordu: " . mysqli_error($conn);
}
?>
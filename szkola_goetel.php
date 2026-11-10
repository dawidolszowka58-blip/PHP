<?php 
$servername = "localhost";
$username = "root";
$password = "";
$firstname = $_POST['first_name'];
$birth_date = $_POST['birth_date'];
$height = $_POST['height'];

echo "Imie: " . $firstname . "<br>";
echo "Data urodzenia: " . $birth_date . "<br>";
echo "Wzrost: " . $height . "<br>";

$conn = new mysqli($servername, $username, $password);// create connection
if (!$conn) {// check connection
    die("Połaczenie niepoprawne: " . mysqli_connect_error());
}
echo "Połączono poprawnie" . "<br>";
 $database = "goetel_cwiczenie";

 $sql = "Create database if not exists $database";
 if (mysqli_query($conn , $sql)) {
    echo "Baza danych utworzona poprawnie";
 } else {
    echo "Błąd podczas tworzenia bazy danych: " . mysqli_error($conn);
 }

 if(mysqli_select_db($conn, $database)) {
    echo "Baza danych wybrana poprawnie" . "<br>";
 } else {
    echo "Błąd podczas wybierania bazy danych: " . mysqli_error($conn);
 }

 $sql = "CREATE TABLE IF NOT EXISTS uczniowie (
    id int(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    imie varchar(50) NOT NULL,
    data_urodzenia date NOT NULL,
    wzrost int(3) NOT NULL 
  )";
 if (mysqli_query($conn, $sql)) {
    echo "Tabela utworzona poprawnie" . "<br>";
 } else {
    echo "Błąd podczas tworzenia tabeli: " . mysqli_error($conn);
 }
$sql = "INSERT INTO uczniowie (imie, data_urodzenia, wzrost) VALUES ('$firstname', '$birth_date', '$height')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully" . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 $sql = "Select * from uczniowie";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
    echo "rekordy z tabeli uczniowie" . "<br>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["imie"]. " " . $row["data_urodzenia"]. " - Height: " . $row["wzrost"]. "<br>";
    }
 } else {
    echo "0 results";
 }


 mysqli_close($conn);
?>
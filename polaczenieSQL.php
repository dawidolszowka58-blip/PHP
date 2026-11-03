<?php 
$servername = "localhost";
$username = "root"; // root
$password = ""; // ""  
$conn = new mysqli($servername, $username, $password);// create connection
if (!$conn) {// check connection
    die("Połaczenie niepoprawne: " . mysqli_connect_error());
}
echo "Połączono poprawnie";
 $database = "goetel2";
 /*
 $sql = "Create database $database";
 if (mysqli_query($conn , $sql)) {
    echo "Baza danych utworzona poprawnie";
 } else {
    echo "Błąd podczas tworzenia bazy danych: " . mysqli_error($conn);
 }
*/
 if(mysqli_select_db($conn, $database)) {
    echo "Baza danych wybrana poprawnie";
 } else {
    echo "Błąd podczas wybierania bazy danych: " . mysqli_error($conn);
 }
/*
 $sql1 = "CREATE TABLE MyGuests (
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(50) NOT NULL,
    lastname varchar(50) NOT NULL,
    email varchar(100) NOT NULL,
    reg_date timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
 if (mysqli_query($conn, $sql1)) {
    echo "Tabela utworzona poprawnie";
 } else {
    echo "Błąd podczas tworzenia tabeli: " . mysqli_error($conn);
 }
 $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john.doe@example.com')";
 if (mysqli_query($conn, $sql)) {
    echo "Rekord dodany poprawnie";
 } else {
    echo "Błąd podczas dodawania rekordu: " . mysqli_error($conn);
 }
  $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Jane', 'Pork', 'jane.doe@example.com')";
 if (mysqli_query($conn, $sql)) {
    echo "Rekord dodany poprawnie";
 } else {
    echo "Błąd podczas dodawania rekordu: " . mysqli_error($conn);
 }
 $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Peter', 'Parker', 'peter.parker@example.com')";
 if (mysqli_query($conn, $sql)) {
    echo "Rekord dodany poprawnie";
 } else {
    echo "Błąd podczas dodawania rekordu: " . mysqli_error($conn);
 }
*/
 $sql = "Select * from MyGuests";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]. "<br>";
    }
 } else {
    echo "0 results";
 }
  $sql = "Select * from MyGuests";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_row($result)) {
            echo "id: " . $row[0]. " - Name: " . $row[1]. " " . $row[2]. " - Email: " . $row[3]. "<br>";
        }
    } else {
        echo "0 results";
    }
 $sql = "Select * from MyGuests";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<ul>";
    while($row = mysqli_fetch_row($result)) {
        echo "<li>id: " . $row[0]. " - Name: " . $row[1]. " " . $row[2].
         " - Email: " . $row[3]. "</li>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}
// generowanie tabeli 
$sql = "Select * from MyGuests";
$result = mysqli_query($conn, $sql);
if ( mysqli_num_rows($result) > 0) {
    echo "<table>";
    while($row = mysqli_fetch_row($result)) {
        echo "<tr><td>id: " . $row[0]. "</td><td> - Name: " . $row[1]. " " . $row[2].
         "</td><td> - Email: " . $row[3]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
*
/* //Kasowanie danych z tabeli
$sql = "Delete from MyGuests where id=3";
if (mysqli_query($conn, $sql)) {
    echo "Rekord usunięty poprawnie";
} else {
    echo "Błąd podczas usuwania rekordu: " . mysqli_error($conn);
}
    */
// Update danych w tabeli
/*
$sql = "Update MyGuests set lastname='Kowalski' where id=2";
if (mysqli_query($conn, $sql)) {
    echo "Rekord zaktualizowany poprawnie";
} else {
    echo "Błąd podczas aktualizacji rekordu: " . mysqli_error($conn);
}
    */
/*
 // Pobieranie danych do limitu 30 rekordów z tabeli Orders
 $sql = "Select * from Orders limit 30 ";  

 $sql = "Select * from Orders limit 30 offset 10"; // pobranie rekordów od 11 do 40
*/ 

?> 
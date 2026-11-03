<?php 
$login = $_POST['name'];
$haslo = sha1($_POST['haslo']);
$sql = "INSERT INTO users (login, haslo) VALUES ('$login', '$haslo')";
if (mysqli_query($conn, $sql)) {
    echo "Nowy uzytkownik został dodany pomyślnie";
} else {
    echo "Błąd podczas dodawania nowego uzytkownika: " . mysqli_error($conn);
}
?>


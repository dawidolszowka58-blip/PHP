<?php 
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$fav_language = $_POST['fav_language'];

echo "First Name: " . $firstname . "<br>";
echo "Last Name: " . $lastname . "<br>";
echo "Favorite Language: " . $fav_language . "<br>";

$sql = "INSERT INTO users (first_name, last_name, fav_language) VALUES ('$firstname', '$lastname', '$fav_language')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
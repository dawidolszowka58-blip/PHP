// LOGOWANIE DO APLIKACJI
<?php
$login = $_POST['name'];
$haslo = sha1($_POST['haslo']);
$sql = "SELECT login , haslo from myguests where login = '$login' ";
if($result = mysqli_query($conn , $sql))
    $row = mysqli_fetch_assoc($result);
    if( $haslo == $row['password']){
        echo "Zalogowano poprawnie";
    } else {
        echo "Error :" . $sql . "<br>" . mysqli_error($conn);
    }
    ?>
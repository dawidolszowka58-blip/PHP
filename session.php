<?php 
session_start();
echo 'Welcome to the session page #1';
$_SESSION['favcolor'] = 'blue';
$_SESSION['favanimal'] = 'cat';
$_SESSION['time'] = time();
echo '<br/><a href="session2.php"> page 2</a>';
?>
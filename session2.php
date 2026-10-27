<?php 
session_start();
echo 'Welcome to page #2<br/>';
echo 'Ulubiony kolor ' . $_SESSION['favcolor'] . '<br/>';
echo 'Twoje ulubione zwierzę to ' . $_SESSION['favanimal'] . '<br/>';
echo date ('H:i:s', $_SESSION['time']) .'<br>';
echo $_SESSION['bzdura'] ;
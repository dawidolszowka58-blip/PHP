//  skrypt php do demonstracji typow zmiennych 
<?php 
$liczba1=42;
print("liczba to:" . $liczba1);

$liczbaOctalna=042;
print("<br>liczba osemkowa to:" . $liczbaOctalna);

$liczbaHex=0x2A;
print("<br>liczba szesnatkowa to :" . $liczbaHex);

$liczbaBin = 0b101010;
print("<br>liczba binarna to:" . $liczbaBin);

$liczbaDuza=1_234_567;
print("<br>liczba duza to:" . $liczbaDuza);

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567;

print("<br> liczba to : "  . $a . $b . $c . $d )
?> 
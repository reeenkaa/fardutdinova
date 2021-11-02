<?php
$a=rand(-5,0);
$b=rand(0,5);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
do {
echo($a . "<br>");
$a=++$a; }
while ($a<=$b);
?>
 <p><a href="http://fardutdinova:8080/index.php ">Главное меню</a></p>
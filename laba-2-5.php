<b> Задание 2-5 </b><br>
<p> Найти значение функций. Вариант 8. </p><br>
<img src="pictures\zadanie.PNG"><br>
<?php
$a=rand(-10,10);
$b=rand(-10,10);
echo "<br> Значение a = $a и значение b = $b <br>";
function fun ($u, $t){
if (($u>=0)&&($t>=0)){
$f = $u/$t - pow($t,2);}
if (($u<0)&&($t>=0)){
$f = $u + pow($t,2)/$u;}
if (($u>=0)&&($t<0)){
$f = $u - $t;}
if (($u<0)&&($t<0)){
$f = (($t+3*$u)/$u*$t);}
return $f;}
$f1=(fun($a+1/$b,pow($b,8)/pow($a,6)));
echo "<br>Значение первой части суммы = $f1<br>";
$f2=(fun(pow($a,3/4) + pow($b,5/6),$b-$a));
echo "<br>Значение второй части суммы = $f2<br>";
$z = $f1 + $f2;
echo "<br>Значение z = $z<br>";
?>
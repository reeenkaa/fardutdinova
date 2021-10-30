<b> Задание 2-1 </b>
<p> 1 - Массив "треугольных" чисел: </p>
<?php 
 for ($i = 1; $i <= 10; $i++) 
 {
	$treig[$i]=$i*($i+1)/2;
 };
 for ($j=1; $j<=10; $j++) 
 {
	 echo $treig[$j].' ';
	 };
?>
<p> 2 - Массив квадратов натуральных чисел: </p>
<?php 
 for ($i = 1; $i <= 10; $i++) 
 {
	$kvd[$i]=$i*$i;
 };
 for ($j=1; $j<=10; $j++) 
 {
	 echo $kvd[$j].' ';
	 };
?>
<p> 3 - Объединение двух предыдущих массивов: </p>
<?php 
 for ($i = 1; $i <= 10; $i++) 
 {
	$rez[$i]=$treig[$i];
 };
  for ($i = 1; $i <= 10; $i++) 
 {
	$rez[10+$i]=$kvd[$i];
 };
  echo '<pre>';
 print_r($rez);
 echo '</pre>';
?>
<p> 4 - Сортировка массива: </p>
<?php 
 sort($rez);
   echo '<pre>';
 print_r($rez);
 echo '</pre>';
?>
<p> 5 - Удаление первого элемента массива: </p>
<?php 
 unset($rez[1]);
   echo '<pre>';
 print_r($rez);
 echo '</pre>';
?>
<p> 6 - Удаление повторяющихся элементов массива: </p>
<?php 
 $rez1=array_unique($rez);
   echo '<pre>';
 print_r($rez1);
 echo '</pre>';
?>
<b> Задание 2-2 </b><br>
<?php
$n=rand(3,20);
for ($i = 0; $i <= $n-1; $i++) 
 {
	 $a=rand(10,99);
	$mas[$i]=$a;
 };
 echo "Массив из $n элементов, заполненный случайными числами: ";
 for ($j=0; $j<=$n-1; $j++) 
 {
	 echo $mas[$j].' ';
	 };
?>
<?php 
echo "<br> Массив, отсортированный по возрастанию: ";
 sort($mas);
  for ($j=0; $j<=$n-1; $j++) 
 {
	 echo $mas[$j].' ';
	 };
?>
<?php 
echo "<br> Массив, с перевернутыми элементами: ";
  $mas1=array_reverse($mas);
  for ($j=0; $j<=$n-1; $j++) 
 {
	 echo $mas1[$j].' ';
	 };
?>
<?php 
echo "<br> Массив без последнего элемента: ";
 array_pop($mas1);
   for ($j=0; $j<=$n-1; $j++) 
 {
	 echo $mas1[$j].' ';
	 };
?>
<?php 
echo "<br> Сумма элементов =  ".array_sum($mas1);
echo "<br> Количество элементов =  ".count($mas1);
$b=array_sum($mas1)/count($mas1);
echo "<br> Среднее арифметическое элементов = $b"
?>
<?php
if (in_array("50",$mas1))
{
echo "<br> Число 50 есть в массиве ";	
}
else
{
	echo "<br> Числа 50 нет в массиве ";
}
?>
<?php 
echo "<br> Массив без повторяющихся элементов ";
 $mas1=array_unique($mas1);
  for ($j=0; $j<=$n-1; $j++) 
 {
	 echo $mas1[$j].' ';
	 };
?>
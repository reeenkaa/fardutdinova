<b> Задание 2-3 </b><br>
<?php
echo " Ассоциативный массив: <br>";
$cust=array("cnum"=>"2001",
"cname"=>"Hoffman",
"city"=>"London",
"snum"=>"1001");
foreach($cust as $key => $value)
{
	echo($key.'='.$value.'<br/>');
}
 ?>
 <?php
echo "<br> Ассоциативный массив c добавленным ключем и значением: <br>";
$cust=array("cnum"=>"2001",
"cname"=>"Hoffman",
"city"=>"London",
"snum"=>"1001",
"raiting" => "100");
foreach($cust as $key => $value)
{
	echo($key.'='.$value.'<br/>');
}
 ?>
  <?php
echo "<br> Массив, отсортированный по значениям: <br>";
array_multisort($cust);
foreach($cust as $key => $value){
echo ($key .' = '. $value .'<br />');}
echo "<br> Массив, отсортированный по ключам: <br>";
ksort($cust);
foreach($cust as $key => $value){
echo ($key .' = '. $value .'<br />');}
echo "<br> Массив, отсортированный функцией sort(): <br>";
sort($cust);
foreach($cust as $key => $value){
echo ($key .' = '. $value .'<br />');}
 ?>
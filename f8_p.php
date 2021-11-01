<?
if ($_POST["a"] > $_POST["b"]){
	 $c=$_POST["a"];
 echo ("большее число: а = $c");
} else {
	if ($_POST["a"] < $_POST["b"]){
		$c=$_POST["b"];
	echo ("большее число: b = $c");
	} 	else {
echo ("Оба числа равны");
 }
 }
echo ("<BR> <A href='f8.html'> Вернуться назад </A>");
?> 
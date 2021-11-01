<b>Задача 3.3</b><br>
<HTML>
<HEAD> <TITLE> Дурнева А.Д. </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
Введите число: <INPUT type="text" name="a" size="3">
<BR> Выбор делителей: <BR> <SELECT NAME="z" SIZE="1">
<OPTION VALUE="1" SELECTED> четные делители
<OPTION VALUE="2"> нечетные делители
<OPTION VALUE="3"> простые делители
<OPTION VALUE="4"> составные делители
<OPTION VALUE="5"> все делители
</SELECT>
<P> <INPUT type="submit" name="obr" value="Вывести">
</FORM>
<?
if (isset($_POST["obr"])) {
switch ($_POST["z"]) {
// смотрим, чему равна переменная $z
case 1:
echo "Четные делители числа " . $_POST["a"] . ": ";
for ($i=1;$i<=$_POST["a"];$i++){
if($_POST["a"]%$i==0){
if ($i%2==0)
echo $i . " ";
}
}
break;
case 2:
echo "Нечетные делители числа " . $_POST["a"] . ": ";
for ($i=1;$i<=$_POST["a"];$i++){
if($_POST["a"]%$i==0){
if ($i%2<>0)
echo $i . " ";
}
}
break;
case 3:
if ($_POST["a"]<2)
echo "Простых делителей заданного числа нет";
else{
echo "Простые делители числа " . $_POST["a"] . ": ";
for ($i=1;$i<=$_POST["a"];$i++){
if($_POST["a"]%$i==0){
for ($j = 2;$j < $i;$k++){
if($i%$j==0) continue 2;
}
echo $i . " ";
}
}
}
break;
case 4:
echo "Составные делители числа " . $_POST["a"] . ": ";
for ($i=1;$i<=$_POST["a"];$i++){
if($_POST["a"]%$i==0){
for ($j = 4;$j < $i;$k++){
if($i%$j==0)
echo $i . " ";
continue 2;
}
}
}
break;
case 5:
echo "Все делители числа " . $_POST["a"] . ": ";
for ($i=1;$i<=$_POST["a"];$i++){
if($_POST["a"]%$i==0)
echo $i . " ";
}
break;
}
}
?>
</BODY> </HTML>
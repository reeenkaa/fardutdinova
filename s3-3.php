<HTML> <BODY>
<H1> Вывод делителей числа N: </H1>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <P> N: <INPUT type="text" name="n" size="3">
 <P> Форма обращения: <BR>
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> четные делители
 <OPTION VALUE="2"> нечетные делители
 <OPTION VALUE="3"> простые делители
 <OPTION VALUE="4"> составные делители
 <OPTION VALUE="5"> все делители
 </SELECT>
 <P> <INPUT type="submit" value="Вывести">
</FORM>
 <BODY><HTML>
 <?
$s1=$_POST["n"];
switch ($_POST["z"]) {

case 1:
for ($i=1; $i<=$s1; $i++){
if ($s1%$i==0){
if ($i%2==0){
echo "$i <br>";
}
}
}
break;

case 2:
for ($i=1; $i<=$s1; $i++){
if ($s1%$i==0){
if ($i%2!=0){
echo "$i <br>";
}
}
}
break;

case 3:
for ($i=1; $i<=$s1; $i++){
if ($s1%$i==0)
echo "$i <br>";
}
break;
case 4:
for ($i=1; $i<=$s1; $i++){
if ($s1%$i==0)
echo "$i <br>";
}
break;

case 5:
for ($i=1; $i<=$s1; $i++){
if ($s1%$i==0)
echo "$i <br>";
}
break;
}
 echo "*если ответа нет - такого типа делителей нет для данного числа";
?>

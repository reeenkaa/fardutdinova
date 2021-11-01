<HTML> <BODY>
<H1> Операции над двумя числами: </H1>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <P> а: <INPUT type="text" name="a" size="3">
<P> b: <INPUT type="text" name="b" size="3">
 <P> Форма обращения: <BR>
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложить
 <OPTION VALUE="2"> вычесть
 <OPTION VALUE="3"> умножить
  <OPTION VALUE="4"> разделить
 </SELECT>
 <P> <INPUT type="submit" value="Посчитать">
</FORM>
 <BODY><HTML>
 <?
$s1=$_POST["a"];
$s3=$_POST["b"];
$s4=" = ";
switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — это обращение «господин»…
 $s2=" + ";
 $s5=$s1+$s3;
 break;
 case 2:
 // 2 — это обращение «госпожа»…
 $s2=" - ";
 $s5=$s1-$s3;
 break;
 case 3:
 // 3 — это обращение «товарищ»…
 $s2=" * ";
 $s5=$s1*$s3;
 break;
  case 4:
 // 3 — это обращение «товарищ»…
 $s2=" / ";
 $s5=$s1/$s3;
 break;
}
echo ($s1 . $s2 . $s3 . $s4 . $s5);
?>
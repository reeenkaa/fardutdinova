<HTML> <BODY>
<H1> Обработка строки: </H1>
<HEAD> <TITLE> Фардутдинова Р.Р. </TITLE> </HEAD>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <P> Введите текст: <INPUT type="text" name="n" size="100">
 <P> Введите первый символ: <INPUT type="text" name="a" size="1">
 <P> Введите второй символ: <INPUT type="text" name="b" size="1">
 <P> <INPUT type="submit" name="v" value="Вывести">
</FORM>
 <BODY><HTML>
<?php
if (isset($_POST["v"])) {
	$n = $_POST["n"];
	$a = $_POST["a"];
	$b = $_POST["b"];
	$aa=$a.$b;
	$bb=$a.'';
echo "Замена первого символа на второй: ";
echo str_replace($a, $b, $n);
echo "<br> Строка без повторов: ";
echo join (array_unique(str_split($n)));
echo "<br>Строка без второго символа, перед которым стоит первый: ";
echo str_replace($aa, $bb, $n);
}
?>
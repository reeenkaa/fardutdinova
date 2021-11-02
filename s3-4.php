<H1>Задача 3.4</H1><br>
<HTML>
<HEAD> <TITLE> Фардутдинова Р.Р. </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите логин: <INPUT type="text" name="a" size="30">
 
 <P> <INPUT type="submit" name="n" value="Вход">
</FORM>
<?
if (isset($_POST["n"])) {
if ($_POST["a"]=="reeenkaa"){
	echo "Здравствуйте, Фардутдинова Рената Рустемовна!";}
else if ($_POST["a"]=="bkmtv"){
	echo "Здравствуйте, Бикметова Эльза Махмутовна!";}
else if ($_POST["a"]=="sanechka"){
	echo "Здравствуйте, Матвеева Александра Юрьевна!";}
else if ($_POST["a"]=="dankal"){
	echo "Здравствуйте, Кальметьев Данил Ильгизович!";}
else {echo "Вы не зарегестрированный пользователь!";}
}
?>
</BODY> </HTML>
<b>Задача 3.5</b><br>
<H1> Анкета: </H1>
<HTML>
<HEAD> <TITLE> Фардутдинова Р.Р. </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
Ваше имя: <INPUT type="text" name="a" size="30">
<p> 1. Считаете ли Вы, что у многих ваших знакомых хороший характер?  <br>
<input type = "radio" name ="b" value = "Yes"> Да
<input type = "radio" name ="b" value = "No"> Нет
<p> 2. Раздражают ли Вас мелкие повседневные обязанности?  <br>
<input type = "radio" name ="c" value = "Yes"> Да
<input type = "radio" name ="c" value = "No"> Нет
<p> 3. Верите ли Вы, что ваши друзья преданы Вам?  <br>
<input type = "radio" name ="d" value = "Yes"> Да
<input type = "radio" name ="d" value = "No"> Нет
<p> 4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?  <br>
<input type = "radio" name ="e" value = "Yes"> Да
<input type = "radio" name ="e" value = "No"> Нет
<p> 5. Способны ли Вы ударить собаку или кошку?  <br>
<input type = "radio" name ="f" value = "Yes"> Да
<input type = "radio" name ="f" value = "No"> Нет
<p> 6. Часто ли Вы принимаете лекарства? <br>
<input type = "radio" name ="g" value = "Yes"> Да
<input type = "radio" name ="g" value = "No"> Нет
<p> 7. Часто ли Вы меняете магазин, в который ходите за продуктами?   <br>
<input type = "radio" name ="h" value = "Yes"> Да
<input type = "radio" name ="h" value = "No"> Нет
<p> 8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?  <br>
<input type = "radio" name ="i" value = "Yes"> Да
<input type = "radio" name ="i" value = "No"> Нет
<p> 9. Тяготят ли Вас общественные обязанности? <br>
<input type = "radio" name ="k" value = "Yes"> Да
<input type = "radio" name ="k" value = "No"> Нет
<p> 10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?  <br>
<input type = "radio" name ="l" value = "Yes"> Да
<input type = "radio" name ="l" value = "No"> Нет
<p> 11. Часто ли Вам приходят в голову мысли о Вашей невезучести?  <br>
<input type = "radio" name ="m" value = "Yes"> Да
<input type = "radio" name ="m" value = "No"> Нет
<p> 12. Сохранилась ли у Вас фигура по сравнению с прошлым?  <br>
<input type = "radio" name ="n" value = "Yes"> Да
<input type = "radio" name ="n" value = "No"> Нет
<p> 13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей? <br>
<input type = "radio" name ="o" value = "Yes"> Да
<input type = "radio" name ="o" value = "No"> Нет
<p> 14. Нравится ли Вам семейная жизнь?  <br>
<input type = "radio" name ="p" value = "Yes"> Да
<input type = "radio" name ="p" value = "No"> Нет
<p> 15. Злопамятны ли Вы?  <br>
<input type = "radio" name ="q" value = "Yes"> Да
<input type = "radio" name ="q" value = "No"> Нет
<p> 16. Находите ли Вы, что стоит погода, типичная для данного времени года?  <br>
<input type = "radio" name ="r" value = "Yes"> Да
<input type = "radio" name ="r" value = "No"> Нет
<p> 17. Случается ли Вам с утра быть в плохом настроении?  <br>
<input type = "radio" name ="s" value = "Yes"> Да
<input type = "radio" name ="s" value = "No"> Нет
<p> 18. Раздражает ли Вас современная живопись?  <br>
<input type = "radio" name ="t" value = "Yes"> Да
<input type = "radio" name ="t" value = "No"> Нет
<p> 19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?  <br>
<input type = "radio" name ="u" value = "Yes"> Да
<input type = "radio" name ="u" value = "No"> Нет
<p> 20. Надоедает ли Вам делать лабораторные по PHP?  <br>
<input type = "radio" name ="v" value = "Yes"> Да
<input type = "radio" name ="v" value = "No"> Нет
 
<P> <INPUT type="submit" name="obr" value="Результат">
</FORM>
<?
if (isset($_POST["obr"])) {
$da = array ($_POST["d"], $_POST["k"], $_POST["l"], $_POST["o"], $_POST["p"], $_POST["u"]);
$net = array ($_POST["b"], $_POST["c"], $_POST["e"], $_POST["f"], $_POST["g"], $_POST["h"], $_POST["i"], $_POST["m"], $_POST["n"], $_POST["q"], $_POST["r"], $_POST["s"], $_POST["t"], $_POST["v"]);
$sum = 0;
for ($i=0; $i < count ($da); $i++){
	if ($da[$i] == "Yes"){
		$sum++;
	}
}
for ($i=0; $i < count ($net); $i++){
	if ($net[$i] == "Net"){
		$sum++;
	}
}
if ($sum > 15) {
echo ($_POST["a"]. ',у Вас покладистый характер');}
else if ($sum < 8){
echo ($_POST["a"]. ', Вашим друзьям можно посочувствовать');}
else 
echo ($_POST["a"]. 'Вы не лишены недостатков, но с вами можно ладить');
echo ('<br> Результат: '.$sum. ' баллов.');
}
?>
</BODY> </HTML>
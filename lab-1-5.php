<b> ЗАДАЧА №1 </b>
<p> Вариант 8 </p>
<?php
$a=rand(-20,20);
$b=rand(-20,20);
$c=rand(-20,20);
$d=rand(-20,20);
$x=(2*$c*$b+$d-52)/(($a/3)+1);
echo 'a='.$a.'<br>';
echo 'b='.$b.'<br>';
echo 'c='.$c.'<br>';
echo 'd='.$d.'<br>';
echo '<p> Функция </p>';
echo '<div style="float:left";"width=300"><div style="border-bottom:1px solid;font-size:medium;text-align:left;">b*(2*c)+d-52</div>';
echo '<div style="font-size:medium;text-align:left;"> a/3+1 </div></div><br><br><br>';
echo '<div style="float:left";"width=300"><div style="border-bottom:1px solid;font-size:medium;text-align:left;"> '.$b.'*(2*'.$c.')+'.$d.' </div>';
echo '<div style="font-size:medium;text-align:left;">'.$a.'/3+1</div></div><br>';
echo '<br><br>Значение функции = '. number_format ( $x , 2 , ".","").'<div><br>';
?>
 <p><a href="http://fardutdinova:8080/index.php ">Главное меню</a></p>
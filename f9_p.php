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
?>


<b> Задание 2-6 </b><br>
<p> Вариант 8 </p>
<?php
    $N = rand(2,7);              // размерность матрицы
    $K = array(array()); // объявление переменной массива

    // Функция вывода на экран условия задачи
    function PrintTask()
    {
	global $N;
	echo "<h2>Условие задачи</h2>\n";
	echo "В матрице К(n,n) присвоить каждому диагональному элементу разность между суммами элементов соответствующих строки и столбца. \n";
	echo "<p>Размерность матрицы: $N</p>";
    }
    // Функция вывода на экран матрицы
    function PrintMatrix()
    {
	global $N, $K;
	echo "<table border=1>\n";
	// цикл по строкам матрицы
	for ($i = 1; $i <= $N; $i++)
	{
	    echo "<tr>\n";
	    // цикл по столбцам матрицы
	    for ($j = 1; $j <= $N; $j++)
	    {
		if( $i <> $j ) {
		    echo "<td align=\"center\">" , $K[$i][$j], "</td>";
		} else {
		    echo "<td align=\"center\" bgcolor=\"cyan\">" , $K[$i][$j], "</td>";
		}
	    }
	    echo "</tr>\n";
	}
	echo "</table>\n";
    }
    // Функция заполнения матрицы случайными числами
    function FillMatrix()
    {
	global $N, $K;
	// цикл по строкам матрицы
	for ($i = 1; $i <= $N; $i++)
	{
	    // цикл по столбцам матрицы
	    for ($j = 1; $j <= $N; $j++)
	    {
		// если номера строки и столбца не совпадают, то присвоить элементу массива случайное значение, иначе присвоить 0
		if( $i <> $j ) {
		    $K[$i][$j] = rand(-100, 100);
		} else {
		    $K[$i][$j] = 0;
		}
	    }
	}
    }
    // Функция вычисления элементов диагонали
    function CalcMatrix()
    {
	global $N, $K;
	// цикл по размеру массива
	for ($x = 1; $x <= $N; $x++)
	{
	    // вычисление суммы X-ой строки
	    $sum_row = 0;
	    for ($z = 1; $z <= $N; $z++)
		$sum_row = $sum_row + $K[$x][$z];
	    // вычисление суммы X-ого столбца
	    $sum_column = 0;
	    for ($z = 1; $z <= $N; $z++)
		$sum_column = $sum_column + $K[$z][$x];
	    // присвоение X-ому элементу диагонали матрицы значения разницы сумм строки и столбца
	    $K[$x][$x] = abs($sum_row - $sum_column);
	}
    }
    // выполнение программы
    PrintTask();
    FillMatrix();
    echo "<h2>Исходная матрица</h2>";
    PrintMatrix();

    CalcMatrix();

    echo "<h2>Итоговая матрица</h2>";
    PrintMatrix();

?>
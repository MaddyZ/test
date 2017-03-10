<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>123</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="hello">
	<h1>hello</h1>
</div>
<div id="random">
<?php 
	error_reporting(-1);

	echo "Бросаем кубик...\n";

	$random = mt_rand(1,6);

	echo " выпало число $random";
?>

<p> положительное или отрицательное число</br></p>

<?php 
	$number = mt_rand(-10, 10);

	if ($number > 0) {
		echo "число $number положительное.\n";
	} elseif ($number == 0) {
		echo "число равно нулю.\n";
		# code...
	} else {
		echo "число $number отрицательное.\n";
	}
?>
</div>

<div id="kosti">
	<?php 
 	$anonDice1 = mt_rand(1,6);
 	$anonDice2 = mt_rand(1,6);

 	$compDice1 = mt_rand(1,6);
 	$compDice2 = mt_rand(1,6);
 	echo " У анона выпало ($anonDice1) и ($anonDice2)\nУ компьютера ($compDice1) и ($compDice2) <br>";
 	$anonSum = ($anonDice1 + $anonDice2);
 	$compSum = ($compDice2 + $compDice1);

 	if (($anonDice1 == $anonDice2) && ($compDice1 == $compDice2)) {
 		echo "2 дабла - тебя ждет большая удача!<br>";
 		exit();
 	} 

 	if($anonSum > $compSum) {
 		echo "Победил Анон";
 	}elseif($anonSum == $compSum) {
 		echo "Ничья!";
 	}elseif($anonSum < $compSum) {
 		echo "Победил компьютер";}
?>

</div>
<div id="shivr">
<?php
//Доделай шифрование до нормального уровня
error_reporting(-1);
/* Коды для замены букв */
$code = array(
    'а'	=>	'1',
    'б'	=>	'2',
    'в'	=>	'3',
    'г'	=>	'4',
    'д'	=>	'5',
    'е'	=>	'6',
    'ё'	=>	'7',
    'ж'	=>	'8',
    'з'	=>	'9',
    'и'	=>	'0',
    'й'	=>	'~',
    'к'	=>	'!',
    'л'	=>	'@',
    'м'	=>	'#',
    'н'	=>	'$',
    'о'	=>	'%',
    'п'	=>	'^',
    'р'	=>	'&',
    'с'	=>	'*',
    'т'	=>	'(',
    'у'	=>	')',
	'ф'	=>	'-',
	'ч'	=>	'=',
	'ц'	=>	'{',
	'ч'	=>	'}',
	'ш'	=>	':',
	'щ'	=>	'"',
	'ь'	=>	'|',
	'ы'	=>	'/',
	'ъ'	=>	'>',
	'э'	=>	'<',
	'ю'	=>	',',
	'я'	=>	'['
);
$text = 'я пхп хацкер.';
$cipher = strtr($text, $code);
echo "Оригинал: {$text}\nШифровка: {$cipher}\n";
$TransArray=array_flip($code);
$transcript=strtr($cipher, $TransArray);
?><br><?php
echo "Оригинал: {$cipher}\nРасшифровка: {$transcript}\n";
?>
<?php

error_reporting(-1);

/* Коды для замены букв */
$code = array(
'A' =>	'А',
'Б' =>	'6',
'В' =>	'B',
'Г' =>	'r',
'Д' =>	'D',
'Е' =>	'Е',
'Ж' =>	'}|{',
'З' =>	'3',
'И' =>	'u',
'Й' =>	'u*',
'К' =>	'K',
'Л' =>	'JI',
'М' =>	'M',
'Н' =>	'H',
'О' =>	'O',
'П' =>	'II',
'P' =>	'P',
'С' =>	'C',
'Т' =>	'T',
'У' =>	'Y',
'Ф' =>	'cp',
'Х' =>	'X',
'Ц' =>	'U,',
'Ч' =>	'4',
'Ш' =>	'W',
'Щ' =>	'W',
'Ъ' =>	'~b',
'Ы' =>	'bl',
'Ь' =>	'b',
'Э' =>	'-)',
'Ю' =>	'IO',
'Я' =>	'9'
);

$text = 'ПРОГРАММИСТ';
$l33t = strtr($text, $code);
echo "Ты говоришь: {$text}\nА хакеры говорят: {$l33t}\n";
?>

</div>
</body>
</html>
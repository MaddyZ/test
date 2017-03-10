<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>шифрование</title>
</head>
<body>
	<form name="shifr" action="" method="post">
		<label>Текст для шифрование:</label><br>
		<input type="text" name="text" placeholder="Ваш текст"><br>
		<input type="submit" name="done" value="Выполнить">
	</form>
	<?php 
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

		$text = $_POST["text"];
		$shifr = strtr($text,$code);
		echo "шифрование выполнено: ".$shifr;


	?>
	<hr>
	<form name="de_shifr" action="" method="post">
		<label>Текст для расшифровки:</label><br>
		<input type="text" name="de_shifr" placeholder="Ваш текст"><br>
		<input type="submit" name="done" value="Выполнить">
	</form>
		<?php 
		$de_code = array(
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

		$de_text = $_POST["de_shifr"];
		$de = array_flip($de_code);
		$de_shifr = strtr($de_text,$de);
		echo "Расшифровано: ".$de_shifr;



	?>
</body>
</html>
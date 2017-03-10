<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	<form name="test" action="" method="post">
		<label>Номер:</label><br>
		<input type="text" name="text" placeholder="Ваш текст"><br>
		<input type="submit" name="done" value="Выполнить">
	</form>
	<?php 


		$nomer = $_POST["text"];
		$regexp = '/[а-я][0-9]{3}[а-я]{2}/ui';
		if(preg_match($regexp, $nomer)){
			echo "Номер существует";
		}else
		{echo "Это не номер";}

	?>
	<hr>
	<?php 

	$text = 'пожалуйста, никогда не переходите по адресу http://2ch.so/b если вам дорог ваш рассудок. Заходите лучше на http://google.com';
	$regexp = '!http://([a-z0-9.-]+)(/\\s+)?!';
	$matches = array();
	$count = preg_match_all($regexp, $text, $matches);
	echo "Найдено ссылок:".$count."<br>";
	//echo preg_replace('!http://([a-z0-9.-]+)(/\\s+)?!',"Ссылка удалена!", $text);

	?>
	<hr>
	<?php 


		$text = 'kitty@mail.ru, dog@yandex.ru, test@google.com ';
		$regexp = '/([a-zA-Z0-9_+.-]+)@([a-z.-]+)/ui';
		$result = preg_replace($regexp,'$1 (котик) $2', $text);
		echo $result;

	 ?>

	 <hr>

	<?php
 
error_reporting(-1);
 
$number1 = "8-(911)-506 56 56";                  //правильный
$number2 = "8-911-50-656-56";                    //правильный
$number3 = "89115065656";                        //правильный
$number4 = "02";                                //неправильный
$number5 = "89115065656 позвать Люду";          //неправильный
$number6 = "09115065656";                       //неправильный
$number7 = "щоваыоаовж";                        //неправильный
$number8 = "+38(095) 579-17-99";                //неправильный
$number9 = "+8 (915) 579-17-99";                //неправильный
$number10 = "Мой номер: 8 (915) 579-17-99";     //неправильный
$number11 = "8-911-404-44-11";                   //правильный
$number12 = "+7(812)67867671";                   //правильный
$number13 = "89114044411";                       //правильный
$number14 = "+89114044411";                     //неправильный
$number15 = "+7(812)6+7867671";                 //неправильный
$number16 = "89114+744411";                     //неправильный
$number17 = "+7(812)67867671 Вася";             //неправильный
$number18 = "7(812)6+7867671";                  //неправильный
 
//функция определяющая правильность номера
function chekNumbers ($number)
{//начинает функцию
$regexp = "/[() -]/"; //убираем скобки, пробелы и тире
$arrayOfNumbers = array(); //найденные участки будем заносит в массив из строк
$arrayOfNumbers = preg_split($regexp, $number,0,PREG_SPLIT_NO_EMPTY); //выделили из текста участки и занесли в строковый массив
//var_dump($arrayOfNumbers); //распечатали элементы массива
$receivedNumber = NULL; //склеим все цифры из массива в одну строку
for ($i=0; $i<count($arrayOfNumbers); $i++) {
    $receivedNumber = $receivedNumber.$arrayOfNumbers[$i];
}
//echo "{$receivedNumber}\n";
//если в начале строки есть +7, то заменим на 8 
$regexpPlusSeven = "/^\\+7/";//для поиска сивола "+" используют конструкцию \\+
$receivedNumberOnlyEight = NULL; //Будет номер только с 8 вначеле
$receivedNumberOnlyEight = preg_replace($regexpPlusSeven, "8", $receivedNumber);
//echo "{$receivedNumberOnlyEight}\n";
 
$regexpNumber = "/^8[0-9]{10}$/"; //для проверки полученной строки на соответствие формату телефона
echo "Вы ввели: {$number}\n";
if (preg_match($regexpNumber, $receivedNumberOnlyEight))
    echo "Номер телефона введён правильно: {$receivedNumberOnlyEight}\n\n";
   else
    echo "Ошибка ввода!\n\n";
 
}//заканчивает функцию
chekNumbers ($number1);
chekNumbers ($number2);
chekNumbers ($number3);
chekNumbers ($number4);
chekNumbers ($number5);
chekNumbers ($number6);
chekNumbers ($number7);
chekNumbers ($number8);
chekNumbers ($number9);
chekNumbers ($number10);
chekNumbers ($number11);
chekNumbers ($number12);
chekNumbers ($number13);
chekNumbers ($number14);
chekNumbers ($number15);
chekNumbers ($number16);
chekNumbers ($number17);
chekNumbers ($number18);
 
?>
</body>
</html>
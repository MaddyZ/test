<?php

error_reporting(-1);

$word1 = array('Чудесных', 'Суровых', 'Занятных', 'Внезапных');
$word2 = array('слов', 'зим', 'глаз', 'дней', 'лет', 'мир', 'взор');
$word3 = array('прикосновений', 'поползновений', 'судьбы явлений',
 'сухие листья', 'морщины смерти', 'долины края', 'замены нету', 
'сухая юность', 'навек исчезнув');
$word4 = array('обретаю', 'понимаю', 'начертаю', 'закрываю', 'оставляю',
 'вынимаю', 'умираю', 'замерзаю', 'выделяю');
$word5 = array('очертания', 'безысходность', 'начертанья', 'смысл жизни',
 'вирус смерти', 'радость мира');


$zero = 0;

	$x1 = count($word1)-1;
	$x2 = count($word2)-1;
	$x3 = count($word3)-1;
	$x4 = count($word4)-1;
	$x5 = count($word5)-1;

	$random1 = mt_rand($zero,$x1);
	$words1 = $word1[$random1];
	$random2 = mt_rand($zero,$x2);
	$words2 = $word2[$random2];
	$random3 = mt_rand($zero,$x3);
	$words3 = $word3[$random3];
	$random4 = mt_rand($zero,$x4);
	$words4 = $word4[$random4];
	$random5 = mt_rand($zero,$x5);
	$words5 = $word5[$random5];



echo "{$words1} {$words2} {$words3}<br>";
echo "{$words4} {$words5}";
 ?>

<hr>
 <?php

error_reporting(-1);

/* Слоги, из которых составляется имя */
$letters = array(
    'ко',   'и',    'дзу',  'ми',
    'са',   'ку',   'ра',   'да',
    'чи',   'а',    'ки',   'ми',
    'на',   'го',   'ха',   'ру'
);

/* В эту переменную запишем получившееся имя */
$name = '';

/* Гененрируем 4 слога */
for ($i = 1; $i <= 4; $i++) {   
    /* Выкидываем случайное число (count - число элементов в массиве) */
    $random = mt_rand(0,count($letters)-1); 
    $randomText = $letters[$random];
    $name .= $randomText;
    echo "Выпало число {$random}, слог {$randomText}<br>";

}

echo "------<br>";
echo "Советую имя: {$name} - не прогадаешь!<br>";
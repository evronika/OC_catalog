<?php
date_default_timezone_set('Europe/Minsk');
setlocale(LC_ALL, 'ru_RU.UTF-8');
$now = time();
echo $now;
echo '<br/>';
$month_number = date('n', $now);
echo "current month: $month_number<br/>";
$ru_month = [
    1 => 'Янв',
    'Фев','Мар'
    ];
$month_ru_name = 'Месяц не определен';
if (isset($ru_month[$month_number])){
    $month_ru_name = $ru_month[$month_number];
}
echo date("Сейчас d $month_ru_name Y года", $now);
// Сейчас: 14 Фев 2017 года
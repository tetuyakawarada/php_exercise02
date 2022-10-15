<?php

$poket_money = 1000;
$fund_raising = 101;

echo 'あなたの所持金は' . $poket_money . '円です' . PHP_EOL;

do {
    echo $fund_raising . '円を募金しました' . PHP_EOL;
    $poket_money -= $fund_raising;
    echo '残り金額は' . $poket_money . '円です' . PHP_EOL;
} while ($poket_money >= $fund_raising);

echo 'あなたはこれ以上募金できません';

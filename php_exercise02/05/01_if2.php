<?php

$poket_money = 1000;
$fund_raising = 101;

echo "あなたのお金は{$poket_money}円です";

while ($poket_money >= $fund_raising) {
    echo "{$fund_raising}円募金しました" . PHP_EOL;
    $poket_money -= $fund_raising;
    echo "残りの金額は{$poket_money}円です" . PHP_EOL;
}

echo 'あなたはこれ以上募金できません';

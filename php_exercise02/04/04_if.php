<?php

echo '$score_mathの値を入力してください: ';
$score_math = trim(fgets(STDIN));

echo '$score_englishの値を入力してください: ';
$score_english = trim(fgets(STDIN));

if ($score_math >= 60 && $score_english >= 60) {
    echo '合格';
} elseif ($score_math >= 60 || $score_english >= 60) {
    echo '再試験';
} else {
    echo '不合格';
}

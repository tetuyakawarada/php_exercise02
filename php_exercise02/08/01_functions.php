<?php

// '朝' or '昼' or '夜'を指定
$time_zone = '昼';

function get_greeting($time_zone)
{
    $greetings = [
        '朝' => 'おはよう',
        '昼' => 'こんにちは',
        '夜' => 'こんばんは'
    ];
    // コードを追記

    // echo $time_zone;
    // echo $greetings[$time_zone];

    return "{$time_zone}の挨拶は{$greetings[$time_zone]}";
}

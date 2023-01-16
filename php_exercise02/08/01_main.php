<?php

require_once __DIR__ . '/01_functions.php';

// コードを追記
echo get_greeting('朝') . "<br>";
echo get_greeting('昼') . "<br>";
echo get_greeting('夜') . "<br>";
echo "<br>";
echo get_greeting($time_zone) . "<br>";

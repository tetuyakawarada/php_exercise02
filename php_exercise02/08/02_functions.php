<?php

function calc_cal($total_meals)
{
    // コードを追記
    // 標準関数を使用して、配列の値を合算
    $total_cal = array_sum($total_meals);
    return "接種カロリー合計は{$total_cal}Kalです";
}

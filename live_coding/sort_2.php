<?php

$seq = [23, 2, 10, 5, 6];

function replace(&$arr, $num)
{
    [$arr[$num], $arr[$num + 1]] = [$arr[$num + 1], $arr[$num]];
}

$n = count($seq) - 1;
foreach (range(0, $n) as $j) {
    for ($i = 0; $i < $n - $j; $i++) {
        if ($seq[$i] > $seq[$i + 1]) {
            replace($seq, $i);
        }
    }
}
print_r($seq);
<?php

$mass = [23, 45, 1, 10, 25];
// sort($mass);

function array_replace1(&$m, $i1, $i2)
{
    [$m[$i1], $m[$i2]] = [$m[$i2], $m[$i1]];
}

$is_replace = false;
for ($j = 0; $j < count($mass) - 1; $j++) {
    for ($i = 0; $i < count($mass) - 1 - $j; $i++)
        if ($mass[$i] > $mass[$i + 1]) {
            array_replace1($mass, $i, $i + 1);
            $is_replace = true;
        }
    if (!$is_replace)
        break;
}
print_r($mass);

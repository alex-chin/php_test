<?php


// обмен элемента i c элементом j в массиве nums
function obmen(array &$nums, $i, $j): void
{
    [$nums[$i], $nums[$j]] = [$nums[$j], $nums[$i]]; // Обмен в одну строку
}

// сортировка массива 1 проход
function b_sort(array $nums): array
{
    $n = count($nums);
    foreach (range(0, $n - 1) as $j) {
        $is_changed = false;
        for ($i = 0; $i < $n - 1 - $j; $i++) {
            if ($nums[$i] > $nums[$i + 1]) {
                obmen($nums, $i, $i + 1);
                $is_changed = true;
            }
        }
        if (!$is_changed)
            break;
    }
    return $nums;
}


$nums = [3, 4, 1, 2, 3];
print_r(b_sort($nums));
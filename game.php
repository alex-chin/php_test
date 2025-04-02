<?php
/* 
https://habr.com/ru/companies/yandex/articles/340784/
Петя и Вася играют в игру: они по очереди берут из колоды карточки, на которых написаны целые неповторяющиеся положительные числа 
(первый карточку всегда берет Петя). Карточки игроки берут по одной сверху колоды. 
После этого они сравнивают значения, записанные на карточках: игрок, у которого меньше, 
тянет еще одну карточку и оставляет ее у себя. 
Когда все карточки заканчиваются, 
Петя и Вася считают сумму значений, написанных на этих карточках. 
Проигрывает тот, у кого сумма получается меньше, чем у другого игрока.

Формат входных данных

В первой строке входных данных записано целое число $n$, кратное трем, — общее количество карточек $(3 \leq n \leq 999)$.

В следующей строке записаны $n$ различных целых положительных чисел $a_i$ — значения, 
написанные на карточках в том порядке, в котором Петя и Вася будут их раздавать $(1 \leq a_i \leq 1000)$.

Формат выходных данных

В единственной строке выведите Petya, если в игре побеждает Петя, или Vasya, если в игре побеждает Вася.
*/


function generate_cards($length, $min, $max): array
{
    $randomArray = array_map(fn() => rand($min, $max), range(1, $length));
    return $randomArray;
}

$deck = generate_cards(10, 10, 100);


function game($deck): string
{
    $P = array();
    $V = array();

    $iter = new ArrayIterator($deck);
    foreach ($iter as $card) {
        $card_p = $iter->current();
        $iter->next();
        $card_v = $iter->current();
        $iter->next();
        $card_n = $iter->current();

        $P[] = $card_p;
        $V[] = $card_v;
        if ($card_v < $card_p)
            $V[] = $card_n;
        else
            $P[] = $card_n;
    }
    // print_r($V);
    // print_r($P);
    if (array_sum($V) > array_sum($P))
        return 'Vasya';
    else
        return 'Petya';

}

echo game([1, 2, 3]) . "\n";

echo game([1, 4, 2]) . "\n";

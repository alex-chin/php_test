<?php
function reverse(&$mas)
{
    [$mas[0], $mas[1], $mas[3], $mas[4]] = [$mas[4], $mas[3], $mas[1], $mas[0]];

}

function reverse2($mas)
{
    for ($i = count($mas)-1; $i >= 0; $i--) {
        yield $mas[$i];
    }

}

function reverse3(&$mas): void
{
    $len = count($mas) - 1;
    $n = intdiv(count($mas), 2);
    for ($i = 0; $i <= $n; $i++) {
        $temp = $mas[$i];
        $mas[$i] = $mas[$len - $i];
        $mas[$len - $i] = $temp;
    }


}
$mass = [1, 2, 'z', 4, 5];
reverse($mass);
print_r($mass);


$mass = [1, 2, 'z', 4, 5];
print_r([...reverse2($mass)]);


$mass = [1, 2, 'z', 4, 5];
reverse3($mass);
print_r($mass);




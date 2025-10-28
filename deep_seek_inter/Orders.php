<?php

/*
 * Задача 5: Работа с данными и коллекциями
Вопрос: "Есть массив заказов. Каждый заказ содержит order_id, customer_id, amount и status. Нужно:
Сгруппировать заказы по customer_id
Для каждого клиента посчитать общую сумму заказов
Вернуть клиентов, у которых общая сумма > 1000, в формате customer_id => total_amount"

https://chat.deepseek.com/share/delg52tzrttugjftqe

 */

$orders = [
    [
        'order_id' => 101,
        'customer_id' => 1,
        'amount' => 450.50,
        'status' => 'completed'
    ],
    [
        'order_id' => 102,
        'customer_id' => 2,
        'amount' => 1200.00,
        'status' => 'completed'
    ],
    [
        'order_id' => 103,
        'customer_id' => 1,
        'amount' => 800.25,
        'status' => 'pending'
    ],
    [
        'order_id' => 104,
        'customer_id' => 3,
        'amount' => 300.00,
        'status' => 'completed'
    ],
    [
        'order_id' => 105,
        'customer_id' => 2,
        'amount' => 150.75,
        'status' => 'completed'
    ],
    [
        'order_id' => 106,
        'customer_id' => 4,
        'amount' => 2100.00,
        'status' => 'completed'
    ],
    [
        'order_id' => 107,
        'customer_id' => 1,
        'amount' => 95.50,
        'status' => 'cancelled'
    ],
    [
        'order_id' => 108,
        'customer_id' => 3,
        'amount' => 750.00,
        'status' => 'completed'
    ]
];

$customers = [];

$customers = array_map(function ($item) use (&$orders, &$customers) {
    $customers[$item['customer_id']] = 0;
    echo $item['customer_id'];

}, $orders);

//$customers = array_unique($customers);


//array_map(function ($item) use (&$orders, &$customers) {
//    $customers[] = $item['customer_id'];
//}, $orders);

print_r($customers);




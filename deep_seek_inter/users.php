<?php

/*
 * У нас есть массив $users, каждый элемент которого — ассоциативный массив с ключами id, name и email.
 * Нужно написать функцию, которая преобразует этот массив в новый,
 * где каждый элемент будет иметь вид 'ID: Name <Email>',
 * и отсортирует его по id в обратном порядке.
 *
 * https://chat.deepseek.com/a/chat/s/aa4bca61-9ee1-4085-8777-f00302dde3dc
 *
 */

$users = [
    [2, 'Dao', 'dao.mail.com'],
    [3, 'Lao', 'lao.mail.com'],
    [23, 'Djo', 'djo.mail.com'],
];

function print_users($users)
{
    uasort($users, fn($a, $b) => ($a[0] <=> $b[0]) < 0);

    return array_map(fn($user) => sprintf("$user[0]: $user[1] <$user[2]> "), $users);
}


print_r(print_users($users));


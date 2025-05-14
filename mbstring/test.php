<?php

if (extension_loaded('mbstring')) {
    echo 'mbstring включен!';
} else {
    echo 'mbstring не установлен!';
}

$text = "Текст в Windows-1251";
$utf8Text = mb_convert_encoding($text, 'UTF-8', 'Windows-1251');
echo $utf8Text;
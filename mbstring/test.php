<?php

if (extension_loaded('mbstring')) {
    echo 'mbstring включен!';
} else {
    echo 'mbstring не установлен!';
}
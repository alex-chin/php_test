<?php

function xmlFileToArray($filePath) {
    // Чтение содержимого файла
    $xmlString = file_get_contents($filePath);

    if ($xmlString === false) {
        throw new Exception("Не удалось прочитать файл: $filePath");
    }

    // Загрузка XML через SimpleXML
    $xml = simplexml_load_string($xmlString);

    if ($xml === false) {
        throw new Exception("Неверный XML формат в файле: $filePath");
    }

    // Преобразование в JSON и затем в массив
    $json = json_encode($xml);
    return json_decode($json, true);
}

$filePath = 'rss_news.xml';

$js = xmlFileToArray($filePath);
print_r($js);
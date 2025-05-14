<?php
$filePath = 'rss_news.xml';

$dom = new DOMDocument();
$dom->load($filePath);

// Альтернатива с обработкой ошибок
if (@$dom->load($filePath)) {
    echo "XML загружен успешно";
}  else {
    echo "Ошибка загрузки XML";
}

$xpath = new DOMXPath($dom);

$title = $xpath->evaluate('string(/rss/channel/title)');

echo $title;

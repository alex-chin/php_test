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

echo "\n----------------------\n";

$xpath = new DOMXPath($dom);

$title = $xpath->evaluate('string(/rss/channel/title)');

echo $title . "\n";

$titles = $xpath->evaluate('//channel/item/title/text()');
foreach ($titles as $title) {
    echo $title->nodeValue . "\n";
}

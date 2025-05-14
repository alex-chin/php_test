<?php
$dom = new DOMDocument();
$dom->loadXML('<root><item>Test</item></root>');
$items = $dom->getElementsByTagName('item');
echo $items->item(0)->nodeValue; // Outputs: Test
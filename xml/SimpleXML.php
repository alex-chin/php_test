<?php
$xml = simplexml_load_string('
<book>
    <title>PHP Basics</title>
    <author>John Doe</author>
    <price>29.99</price>
</book>
');

echo $xml->title;    // Outputs: PHP Basics
echo $xml->author;   // Outputs: John Doe
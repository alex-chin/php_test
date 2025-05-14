<?php

if (extension_loaded('xml')) {
    echo 'PHP-XML установлен!';
} else {
    echo 'PHP-XML НЕ установлен!';
}

var_dump(
    extension_loaded('SimpleXML'),
    extension_loaded('DOM'),
    extension_loaded('XMLReader'),
    extension_loaded('XMLWriter')
);
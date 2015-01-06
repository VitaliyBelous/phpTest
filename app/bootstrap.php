<?php

$documentRoot = $_SERVER['DOCUMENT_ROOT'];
require_once('SplClassLoader.php');
$classLoader = new SplClassLoader('Vitaly', $documentRoot . 'lib');
$classLoader->register();
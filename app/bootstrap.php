<?php

$documentRoot = $_SERVER['DOCUMENT_ROOT'];
require_once('SplClassLoader.php');
$classLoader = new SplClassLoader('Vitaly', $documentRoot . '..' . DIRECTORY_SEPARATOR . 'lib');
$classLoader->register();
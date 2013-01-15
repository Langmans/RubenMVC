<?php

require dirname(__FILE__).'/src/RubenMVC/Spl/ClassLoader.php';

$loader = new \RubenMVC\Spl\ClassLoader('RubenMVC', dirname(__FILE__).'/src');
$loader->register();
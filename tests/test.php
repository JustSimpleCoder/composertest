<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hello\Bye;
use Hello\Hi;

$a = Hi::some("World");
echo $a ;
echo Bye::say();

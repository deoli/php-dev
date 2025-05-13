<?php

require '../vendor/autoload.php';

use App\Service\Demo;

$test = new Demo();
echo $test->getDemo();

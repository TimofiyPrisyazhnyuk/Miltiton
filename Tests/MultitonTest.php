<?php

namespace Multition\Tests;

use Multition\Multition;

require_once __DIR__ . '/../Multiton.php';

class MultitonTest
{
    public function test()
    {
        print_r(Multition::getInstance(Multition::INSTANCE_1));
        print_r(Multition::getInstance(Multition::INSTANCE_1));
        print_r(Multition::getInstance(Multition::INSTANCE_2));
    }
}

$test = new MultitonTest;
$test->test();
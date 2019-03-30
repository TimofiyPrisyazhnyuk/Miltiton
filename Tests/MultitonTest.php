<?php

namespace Tests;

use Multition;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class MultitonTest
 * @package Tests
 */
class MultitonTest
{
    /**
     * Test get instance.
     */
    public function test()
    {
        print_r(Multition::getInstance(Multition::INSTANCE_1));
        print_r(Multition::getInstance(Multition::INSTANCE_1));
        print_r(Multition::getInstance(Multition::INSTANCE_2));
    }
}

// Run test.
$test = new MultitonTest;
$test->test();
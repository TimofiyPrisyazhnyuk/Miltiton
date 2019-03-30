<?php

/**
 * Class Multition
 */
class Multition
{
    const INSTANCE_1 = '1First';
    const INSTANCE_2 = '2Second';

    /**
     * @var Multiton[]
     */
    private static $instances = [];

    /**
     * this is private to prevent from creating arbitrary instances
     */
    private function __construct()
    {
    }

    /**
     * @param string $instanceName
     * @return Multition
     */
    public static function getInstance(string $instanceName): Multition
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    /**
     * prevent instance from being cloned
     */
    private function __clone()
    {
    }

    /**
     * prevent instance from being unserialized
     */
    private function __wakeup()
    {
    }
}

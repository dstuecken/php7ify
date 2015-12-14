<?php
namespace php7ifytest;

use dstuecken\Php7ify\Php7\Compatibility;

Class Php7CheckTest
    extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function testPhpVersion()
    {
        if (PHP_VERSION_ID >= 70000)
        {
            if (!Compatibility::isPhp7())
            {
                throw new \PHPUnit_Framework_Exception('Version check failed. PHP version is ' . PHP_VERSION);
            }
        }
        else
        {
            if (Compatibility::isPhp7())
            {
                throw new \PHPUnit_Framework_Exception('Version check failed. PHP version is ' . PHP_VERSION);
            }
        }
    }
}
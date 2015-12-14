<?php
namespace php7ifytest;

Class TypeErrorTest
    extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function testThrowException()
    {
        try
        {
            throw new \TypeError('Throwing TypeError');
        }
        catch (\TypeError $e)
        {
            ;
        }
    }
}
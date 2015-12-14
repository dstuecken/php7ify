<?php
namespace php7ifytest;

Class AssertionErrorTest
    extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function testThrowException()
    {
        try
        {
            throw new \AssertionError('Throwing AssertionError');
        }
        catch (\AssertionError $e)
        {
            ;
        }
    }
}
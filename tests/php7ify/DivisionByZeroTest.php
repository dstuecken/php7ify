<?php
namespace php7ifytest;

Class DivisionByZeroTest
    extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function testThrowException()
    {
        try
        {
            throw new \DivisionByZeroError('Throwing Division By Zero Error');
        }
        catch (\DivisionByZeroError $e)
        {
            ;
        }
    }
}
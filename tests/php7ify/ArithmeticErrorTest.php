<?php
namespace php7ifytest;

Class ArithmeticErrorTest
    extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function testThrowException()
    {
        try
        {
            throw new \ArithmeticError('Throwing ArithmeticError');
        }
        catch (\ArithmeticError $e)
        {
            ;
        }
    }
}
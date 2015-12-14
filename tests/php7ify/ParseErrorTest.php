<?php
namespace php7ifytest;

Class ParseErrorTest
    extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function testThrowException()
    {
        try
        {
            throw new \ParseError('Throwing ParseError');
        }
        catch (\ParseError $e)
        {
            ;
        }
    }
}
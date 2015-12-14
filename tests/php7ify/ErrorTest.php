<?php
namespace php7ifytest;

Class ErrorTest
    extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function testThrowException()
    {
        try
        {
            throw new \Error('Throwing Error');
        }
        catch (\Error $e)
        {
            ;
        }
    }
}
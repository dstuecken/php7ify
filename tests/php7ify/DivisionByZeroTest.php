<?php
namespace php7ifytest;

use PHPUnit\Framework\TestCase;

Class DivisionByZeroTest extends TestCase
{
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

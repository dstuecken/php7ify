<?php
namespace php7ifytest;

use PHPUnit\Framework\TestCase;

Class ArithmeticErrorTest extends TestCase
{
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

<?php
namespace php7ifytest;

use PHPUnit\Framework\TestCase;

Class ParseErrorTest extends TestCase
{
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

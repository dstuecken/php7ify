<?php
namespace php7ifytest;

use PHPUnit\Framework\TestCase;

Class AssertionErrorTest extends TestCase
{
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

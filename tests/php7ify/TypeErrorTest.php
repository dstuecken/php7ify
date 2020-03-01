<?php
namespace php7ifytest;

use PHPUnit\Framework\TestCase;

Class TypeErrorTest extends TestCase
{
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

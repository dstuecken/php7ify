<?php
namespace php7ifytest;

use PHPUnit\Framework\TestCase;

Class ErrorTest extends TestCase
{
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

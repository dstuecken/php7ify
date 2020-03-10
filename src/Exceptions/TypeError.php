<?php
/**
 * There are three scenarios where a TypeError may be thrown.
 * The first is where the argument type being passed to a function does not match its corresponding declared
 * parameter type. The second is where a value being returned from a function does not match the declared function return type. The third is where an
 * invalid number of arguments are passed to a built-in PHP function (strict mode only).
 *
 * @link http://php.net/manual/en/class.typeerror.php
 *
 * @package dstuecken\php7ify
 * @author  Dennis Stücken <dstuecken@me.com>
 *
 * @since 7.0
 */
if (!class_exists('\TypeError'))
{
    class TypeError extends Error
    {

    }
}

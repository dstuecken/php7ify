<?php
/**
 * AssertionError is thrown when an assertion made via assert() fails.
 *
 * @link http://php.net/manual/en/class.assertionerror.php
 *
 * @package dstuecken\php7ify
 * @author  Dennis Stücken <dstuecken@me.com>
 *
 * @since 7.0
 */
if (!class_exists('\AssertionError'))
{
    class AssertionError extends Error
    {

    }
}

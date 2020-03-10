<?php
/**
 * ParseError is thrown when an error occurs while parsing PHP code, such as when {@see eval()} is called.
 * @link http://php.net/manual/en/class.parseerror.php
 *
 * @package dstuecken\php7ify
 * @author  Dennis Stücken <dstuecken@me.com>
 *
 * @since 7.0
 */
if (!class_exists('\ParseError'))
{
    class ParseError extends Error
    {

    }
}

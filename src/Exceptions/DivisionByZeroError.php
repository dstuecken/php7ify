<?php
/**
 * DivisionByZeroError is thrown when an attempt is made to divide a number by zero.
 *
 * @link http://php.net/manual/en/class.divisionbyzeroerror.php
 *
 * @package dstuecken\php7ify
 * @author  Dennis Stücken <dstuecken@me.com>
 *
 * @since 7.0
 */
if (!class_exists('\DivisionByZeroError'))
{
    class DivisionByZeroError extends Error
    {

    }
}

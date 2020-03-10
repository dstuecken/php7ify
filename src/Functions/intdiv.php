<?php
/**
 * Integer division
 *
 * @link    http://php.net/manual/de/function.intdiv.php
 *
 * @package dstuecken\php7ify
 * @author  Dennis Stücken <dstuecken@me.com>
 *
 * @since   7.0
 */
if (!function_exists('intdiv'))
{
    function intdiv($dividend, $divisor)
    {
        $dividend = (int) $dividend;
        $divisor  = (int) $divisor;

        if (0 === $divisor)
        {
            throw new \DivisionByZeroError('Division by zero');
        }

        if (-1 === $divisor && ~PHP_INT_MAX === $dividend)
        {
            throw new \ArithmeticError('Division of PHP_INT_MIN by -1 is not an integer');
        }

        return ($dividend - ($dividend % $divisor)) / $divisor;
    }
}

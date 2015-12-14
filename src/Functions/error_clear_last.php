<?php
/**
 * Clear the most recent error
 *
 * @link    http://php.net/manual/de/function.error-clear-last.php
 *
 * @package dstuecken\php7ify
 * @author  Dennis Stücken <dstuecken@i-doit.com>
 *
 * @since   7.0
 */
if (!function_exists('error_clear_last'))
{
    function error_clear_last()
    {
        set_error_handler('var_dump', 0);
        @trigger_error('');
        restore_error_handler();
    }
}
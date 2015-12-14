<?php
/**
 * Perform a regular expression search and replace using callbacks
 *
 * @link    http://php.net/manual/de/function.preg-replace-callback-array.php
 *
 * @package dstuecken\php7ify
 * @author  Dennis Stücken <dstuecken@i-doit.com>
 *
 * @since   7.0
 */
if (!function_exists('preg_replace_callback_array'))
{
    function preg_replace_callback_array(array $patterns, $subject, $limit = -1, &$count = 0)
    {
        $count  = 0;
        $result = '' . $subject;
        if (0 === $limit)
        {
            return $result;
        }

        foreach ($patterns as $pattern => $callback)
        {
            $result = preg_replace_callback($pattern, $callback, $result, $limit, $c);
            $count += $c;
        }

        return $result;
    }
}
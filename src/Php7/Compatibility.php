<?php
namespace dstuecken\Php7ify\Php7;

/**
 * Php7 compatibility checks for php 5.x projects
 *
 * @package dstuecken\php7ify
 * @author Dennis Stücken <dstuecken@i-doit.com>
 *
 * @since 7.0
 */
class Compatibility
{
    /**
     * @return string
     */
    public static function versionString()
    {
        return phpversion();
    }

    /**
     * @return bool
     */
    public static function isPhp7()
    {
        return PHP_MAJOR_VERSION >= 7;
    }

}
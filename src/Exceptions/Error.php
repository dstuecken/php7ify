<?php
/**
 * Error is the base class for all internal PHP error exceptions.
 *
 * @link    http://php.net/manual/en/class.error.php
 *
 * @package dstuecken\php7ify
 * @author  Dennis Stücken <dstuecken@i-doit.com>
 *
 * @since   7.0
 */
if (!class_exists('\Error'))
{
    class Error
        extends Exception
        implements Throwable
    {
        /**
         * Gets a string representation of the thrown object
         *
         * @link  http://php.net/manual/en/throwable.tostring.php
         * @return string <p>Returns the string representation of the thrown object.</p>
         * @since 7.0
         */
        public function __toString()
        {
            return $this->getMessage();
        }
    }
}
<?php
/**
 * Throwable is the base interface for any object that can be thrown via a throw statement in PHP 7,
 * including Error and Exception.
 *
 * @link  http://php.net/manual/en/class.throwable.php
 *
 * @package dstuecken\php7ify
 * @author Dennis Stücken <dstuecken@me.com>
 *
 * @since 7.0
 */
if (!interface_exists('\Throwable'))
{
    interface Throwable
    {

        /***
         * Get the error message
         *
         * @link  http://php.net/manual/en/throwable.getmessage.php
         * @return string
         *
         * @since 7.0
         */
        public function getMessage();

        /**
         * Gets the exception code
         *
         * @link  http://php.net/manual/en/throwable.getcode.php
         * @return int Returns the exception code as integer in
         *
         * @since 7.0
         */
        public function getCode();

        /**
         * Gets the file in which the exception occurred
         *
         * @link  http://php.net/manual/en/throwable.getfile.php
         * @return string Returns the name of the file from which the object was thrown.
         *
         * @since 7.0
         */
        public function getFile();

        /**
         * Gets the line on which the object was instantiated
         *
         * @link  http://php.net/manual/en/throwable.getline.php
         * @return int Returns the line number where the thrown object was instantiated.
         * @since 7.0
         */
        public function getLine();

        /**
         * Gets the stack trace
         *
         * @link  http://php.net/manual/en/throwable.gettrace.php
         * @return array Returns the stack trace as an array in the same format as
         * @see   debug_backtrace()
         *
         * @since 7.0
         */
        public function getTrace();

        /**
         * Gets the stack trace as a string
         *
         * @link  http://php.net/manual/en/throwable.gettraceasstring.php
         * @return string Returns the stack trace as a string.
         *
         * @since 7.0
         */
        public function getTraceAsString();

        /**
         * Returns the previous Throwable
         *
         * @link  http://php.net/manual/en/throwable.getprevious.php
         * @return Throwable Returns the previous {@see Throwable} if available, or <b>NULL</b> otherwise.
         *
         * @since 7.0
         */
        public function getPrevious();

        /**
         * Gets a string representation of the thrown object
         *
         * @link  http://php.net/manual/en/throwable.tostring.php
         * @return string Returns the string representation of the thrown object.
         *
         * @since 7.0
         */
        public function __toString();
    }
}

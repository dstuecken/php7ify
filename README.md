# php7ify

php7ify is a project that brings new php7 classes and exceptions to php 5.x

[![Build Status](https://travis-ci.org/dstuecken/php7ify.svg)](https://travis-ci.org/dstuecken/php7ify)
[![License](https://poser.pugx.org/dstuecken/php7ify/license)](https://packagist.org/packages/dstuecken/php7ify)
[![Latest Stable Version](https://poser.pugx.org/dstuecken/php7ify/v/stable)](https://packagist.org/packages/dstuecken/php7ify)
[![Latest Unstable Version](https://poser.pugx.org/dstuecken/php7ify/v/unstable)](https://packagist.org/packages/dstuecken/php7ify)

## Requirements

* PHP 5.3

## Installation

### Using Composer

To install php7ify with composer, just add the following to your composer.json file:

```json
{
    "require": {
        "dstuecken/php7ify": "1.0"
    }
}
```

or by running the following command:

```shell
composer require dstuecken/php7ify
```

# Usage

Just use the new \Throwable interface in your php 5 project, or catch an \ErrorException.

```php
try 
{
    mysql_query();
}
catch (Error $e)
{
    echo $e->getMessage() . "\n\n";
    echo $e->getTraceAsString();
}
```

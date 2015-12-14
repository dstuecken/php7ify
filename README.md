# php7ify

php7ify is a project that brings new php7 classes and exceptions to php 5.x

# usage

Just use the new \Throwable interface in your php 5 project, or catch an \ErrorException.

```
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

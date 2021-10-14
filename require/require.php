<?php

class Configure
{
    private static $settings = [];

    public static function write($key, $value)
    {
        self::$settings[$key] = $value;
    }

    public static function read($key)
    {
        return self::$settings[$key];
    }

    public static function printAll()
    {
        echo "\n\e[1mPrinting all:\e[0m\n";
        print_r(self::$settings);
    }
}

Configure::printAll();

require __DIR__.'/config.php';

Configure::printAll();

Configure::write('hello', 'sarah');
Configure::write('fruit', 'peach');

Configure::printAll();

require __DIR__.'/config.php';

Configure::printAll();
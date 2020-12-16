<?php

define('STYLE_NORMAL', 0);
define('STYLE_SUCCESS', 1);
define('STYLE_WARNING', 2);
define('STYLE_ERROR', 3);

/**
 * Print a styled message.
 */
function printMessage(string $message, int $styleIndex = 0)
{
    $styles = ["\e[0m", "\e[32m", "\e[33m", "\e[31m"];
    echo "{$styles[$styleIndex]}{$message}{$styles[0]}\n";
}

printMessage('Hello! This is a success message.', STYLE_SUCCESS);
printMessage('Hello! This is a warning message.', STYLE_WARNING);
printMessage('Hello! This is an error message.', STYLE_ERROR);
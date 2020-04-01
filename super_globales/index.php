<?php

/**
 * Check an URI e.g. /home/zog
 */
function isWantedUri(string $regex = '#^/home/zog$#', array &$matches = [])
{
    return preg_match($regex, $_SERVER['REQUEST_URI'], $matches);
}

$uri = $_SERVER['REQUEST_URI'];

$_ENV["hello"] = "world!";

require __DIR__ . "/view.php";

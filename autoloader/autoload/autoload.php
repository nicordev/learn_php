<?php

/**
 * Autoload function
 *
 * @param string $requiredClass
 */
function loadClass(string $requiredClass)
{
    $mapNamespaces = [
        "App" => "src/"
    ];
    $classParts = explode("\\", $requiredClass);
    $namespace = $classParts[0];
    $path = array_diff($classParts, [$namespace]);

    require $mapNamespaces[$namespace] . implode("/", $path) . ".php";
}

spl_autoload_register('loadClass');
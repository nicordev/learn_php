<?php

/**
 * Autoload function
 *
 * @param string $requiredClass
 */
function loadClass(string $requiredClass)
{
    $namespacePaths = [
        "App" => "src/"
    ];
    $classParts = explode("\\", $requiredClass);
    $namespace = array_shift($classParts);
    $required = $namespacePaths[$namespace] . implode("/", $classParts) . ".php";
    require $required;
}

spl_autoload_register('loadClass');
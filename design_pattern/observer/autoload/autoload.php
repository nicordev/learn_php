<?php

function loadClass(string $requiredClass)
{
    $mapNamespaces = [
        "App" => "src/",
        "DPObserver" => "src/Observer/"
    ];
    $classParts = explode("\\", $requiredClass);
    $namespace = $classParts[0];
    $path = array_diff($classParts, [$namespace]);

    require $mapNamespaces[$namespace] . implode("/", $path) . ".php";
}

spl_autoload_register('loadClass');
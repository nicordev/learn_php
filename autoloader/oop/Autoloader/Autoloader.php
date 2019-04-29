<?php

namespace Autoloader;

class Autoloader
{
    /**
     * @var array
     */
    private $namespacePaths;

    /**
     * Autoloader constructor.
     * @param array $namespacePaths
     */
    public function __construct(array $namespacePaths = [])
    {
        $this->namespacePaths = $namespacePaths;
    }

    /**
     * Autoload register
     */
    public function register()
    {
        spl_autoload_register([$this, 'autoload']);
    }

    /**
     * Load a class
     *
     * @param string $requiredClass
     */
    private function autoload(string $requiredClass)
    {
        $classParts = explode("\\", $requiredClass);
        $namespace = array_shift($classParts);
        $required = $this->namespacePaths[$namespace] . implode("/", $classParts) . ".php";
        require $required;
    }
}
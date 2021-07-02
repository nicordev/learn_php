<?php

trait ReflectionTrait
{
    /**
     * Call a private method of an object.
     *
     * @param mixed $arguments
     *
     * @return mixed
     */
    protected function callPrivateMethod(object $object, string $method, ...$arguments)
    {
        $reflectionMethod = new \ReflectionMethod($object, $method);
        $reflectionMethod->setAccessible(true);

        return $reflectionMethod->invokeArgs($object, $arguments);
    }

    /**
     * Set a private property.
     *
     * @param mixed $value
     */
    protected function setPrivateProperty(object $object, string $property, $value): void
    {
        $reflectionProperty = new \ReflectionProperty($object, $property);
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($object, $value);
    }

    /**
     * Get a private property.
     *
     * @return mixed
     */
    protected function getPrivateProperty(object $object, string $property)
    {
        $reflectionProperty = new \ReflectionProperty($object, $property);
        $reflectionProperty->setAccessible(true);

        return $reflectionProperty->getValue($object);
    }
}

<?php

class ObjectMutator
{
    /**
     * Set the value of a private property.
     *
     * @param $object
     * @param $propertyName
     * @param $propertyValue
     * @throws ReflectionException
     */
    public static function setPrivateProperty($object, $propertyName, $propertyValue)
    {
        $reflectionClass = new ReflectionClass($object);
        $reflectionProperty = $reflectionClass->getProperty($propertyName);
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($object, $propertyValue);
        $reflectionProperty->setAccessible(false);
    }

    /**
     * Call a private method of an object.
     *
     * @param $object
     * @param $methodName
     * @param mixed ...$arguments
     * @return mixed
     * @throws ReflectionException
     */
    public static function callPrivateMethod($object, $methodName, ...$arguments)
    {
        $reflectionMethod = new ReflectionMethod($object, $methodName);
        $reflectionMethod->setAccessible(true);
        $methodResult = $reflectionMethod->invokeArgs($object, $arguments);
        $reflectionMethod->setAccessible(false);

        return $methodResult;
    }
}

<?php

function sum()
{
    return array_sum(
        func_get_args() // Get an array containing every parameters passed to the function
    );
}

function printArgumentCount()
{
    $argumentCount = func_num_args();

    if ($argumentCount > 1) {
        return "You passed $argumentCount arguments to the function";
    }

    return "You passed $argumentCount argument to the function";
}

function printSecondArgument()
{
    $secondArgument = func_get_arg(1);

    return "The second argument is $secondArgument";
}

echo sum(3, 5, 1, "7") . "\n";
echo printArgumentCount(3, 5, 1, "7") . "\n";
echo printSecondArgument(3, 5, 1, "7") . "\n";

<?php

$divide = function ($a, $b)
{
    return $a / $b;
};

$integerDivide = function ($a, $b)
{
    return intdiv($a, $b);
};

$modulo = function ($a, $b)
{
    return $a % $b;
};

$floatModulo = function ($a, $b)
{
    return fmod($a, $b);
};

function printOperation($a, $b, string $operation, callable $operate)
{
    $aType = gettype($a);
    $bType = gettype($b);
    $result = $operate($a, $b);
    $resultType = gettype($result);
    echo  "$aType $a $operation $bType $b = $resultType $result\n";
}

printOperation(6, 2, '/', $divide);
printOperation(7, 5, '/', $divide);
printOperation(6.0, 2.0, '/', $divide);
printOperation(7.0, 5.0, '/', $divide);
echo "\n";
printOperation(6, 2, 'intdiv()', $integerDivide);
printOperation(7, 5, 'intdiv()', $integerDivide);
printOperation(6.0, 2.0, 'intdiv()', $integerDivide);
printOperation(7.0, 5.0, 'intdiv()', $integerDivide);
echo "\n";
printOperation(6, 2, '%', $modulo);
printOperation(7, 5, '%', $modulo);
printOperation(6.0, 2.0, '%', $modulo);
printOperation(7.0, 5.0, '%', $modulo);
echo "\n";
printOperation(6, 2, 'fmod()', $floatModulo);
printOperation(7, 5, 'fmod()', $floatModulo);
printOperation(6.0, 2.0, 'fmod()', $floatModulo);
printOperation(7.0, 5.0, 'fmod()', $floatModulo);
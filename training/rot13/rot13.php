<?php

/*
 * OpenClassrooms
 *
 * https://openclassrooms.com/fr/courses/6045521-preparez-vous-aux-tests-techniques-pour-devenir-developpeur/6173101-preparez-vous-aux-tests-d-algorithmique#/id/r-6173181
 */

function fromRot13(string $stringToTransform)
{
    $result = "";
    $stringToTransform = strtoupper($stringToTransform);

    for ($i = 0, $size = strlen($stringToTransform); $i < $size; $i++) {
        $code = ord($stringToTransform[$i]);

        if ($code < 65 || $code > 90) {
            $result .= $stringToTransform[$i];
        } elseif ($code < 78) {
            $result .= chr($code + 13);
        } else {
            $result .= chr($code - 13);
        }
    }

    return $result;
}

echo fromRot13('URYYB JBEYQ') . "\n"; // HELLO WORLD
echo fromRot13('BCRAPYNFFEBBZF') . "\n"; // OPENCLASSROOMS
echo fromRot13('PRPV RFG ZBA PBQR FRPERG') . "\n"; // CECI EST MON CODE SECRET
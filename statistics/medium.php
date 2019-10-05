<?php

/**
 * Calculate the medium of an array
 */
function medium(array $values)
{
    return array_sum($values) / count($values);
}

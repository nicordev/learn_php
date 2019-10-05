<?php
/**
 * Test a regular expression using preg_match and an array of values
 *
 * @param string $regex
 * @param array $testValues
 */
function testRegex(string $regex, array $testValues)
{
    foreach ($testValues as $testValue) {
        $result = preg_match($regex, $testValue) ? "Correct" : "Wrong";
        echo "$result: $testValue\n";
    }
}
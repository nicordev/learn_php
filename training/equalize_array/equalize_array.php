<?php

/*
 * HackerRank
 * https://www.hackerrank.com/challenges/equality-in-a-array/problem?utm_campaign=challenge-recommendation&utm_medium=email&utm_source=24-hour-campaign
 *
 * Karl has an array of integers. He wants to reduce the array until all remaining elements are equal. Determine the minimum number of elements to delete to reach his goal.

For example, if his array is
, we see that he can delete the elements and leaving . He could also delete both twos and either the or the , but that would take deletions. The minimum number of deletions is

.

Function Description

Complete the equalizeArray function in the editor below. It must return an integer that denotes the minimum number of deletions required.

equalizeArray has the following parameter(s):

    arr: an array of integers

Input Format

The first line contains an integer
, the number of elements in .
The next line contains space-separated integers

.

Constraints

Output Format

Print a single integer that denotes the minimum number of elements Karl must delete for all elements in the array to be equal.
 */

function equalizeArray($arr) {

    $stats = array_count_values($arr);
    $total = array_sum($stats);
    $maxCount = max($stats);

    $flippedStats = array_flip($stats);

    $total -= $stats[$flippedStats[$maxCount]];

    return $total;
}
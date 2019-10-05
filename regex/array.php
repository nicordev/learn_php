<?php

require __DIR__ . "/testRegex.php";

/**
 * Regular expression corresponding to a php array
 */
$arrayRegex = '#^\[(\d+(.\d+)?(, \d+(.\d+)?)*)?\]$#';

testRegex($arrayRegex, [
    '[]',
    '[1]',
    '[1, 2, 3, 4.5]',
    '[1, 2, 3, 4.5, ]',
    '[1, 2, 3, 4.5][1, 2, 3, 4.5]',
    'qsdf[1, 2, 3, 4.5, ]',
    '[1, 2, 3, 4.5, ]sdfq'
]);
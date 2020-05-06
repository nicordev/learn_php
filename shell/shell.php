<?php

// 2 ways : using `` or shell_exec('commandNameAndArgumentsHere')

$result = `ls -l`;

echo $result . "\n";

$result = shell_exec('php script.php');

echo $result . "\n";

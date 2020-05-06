<?php

function sumIntegersUsingRegex(string $content)
{
    $counts = [];
    preg_match_all('#\d+#', $content, $counts);
    return array_sum($counts[0]);
}

$text = "1 apple, 2 peaches, 3 peers";

if (!empty($argv[1])) {
    $text = $argv[1];
}

echo 'Sum: ' . sumIntegersUsingRegex($text) . "\n";
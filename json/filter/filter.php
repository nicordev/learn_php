<?php

$jsonData = '[
    {
        "id": "3956ddcd-f1e5-4002-80c6-bbf8fad1b01c",
        "name": "zog",
        "description": "${zogzog}"
    },
    {
        "id": "53dd20c5-548a-49cd-87ed-8a8dbba71a88",
        "name": "bob",
        "description": "${bobob}"
    },
    {
        "id": "8168e25e-bde4-4e64-99fd-0450d9b02427",
        "name": "fruit",
        "description": "${apple}"
    }
]';

$lines = explode("\n", $jsonData);

$filteredLines = array_filter($lines, function ($line) {
    if (preg_match('#\[|\]|\s+{|\s+}|"name":#', $line)) {
        return true;
    }
});

$jsonFiltered = implode("\n", $filteredLines);

echo $jsonFiltered . "\n";
<?php

function printArray(array $elements, int $depth = 0)
{
    echo str_repeat(' ', $depth * 4);

    foreach ($elements as $key => $value) {
        if (is_array($value)) {
            echo "{$key}: \n";
            printArray($value, ++$depth);
        } else {
            
            if (true === $value) {
                $value = 'true';
            } elseif (false === $value) {
                $value = 'false';
            }
            echo "{$key}: {$value}\n";
        }
    }
}

$arrayUser = [
    "id" => "98a90ad0-ef33-4905-9e0e-93836dde9ba0",
    "createdTimestamp" => 1588778409933,
    "username" => "kmartins",
    "enabled" => true,
    "totp" => false,
    "emailVerified" => true,
    "lastName" => "Martins",
    "email" => "k.martins@ubitransport.com",
    "attributes" => [
        "unit_system" => [
            "intl"
        ],
        "legacy_id" => [
            "42"
        ],
        "type" => [
            "AGENCY"
        ],
        "locale" => [
            "fr"
        ],
        "homepage" => [
            ""
        ]
    ],
    "disableableCredentialTypes" => [],
    "requiredActions" => [],
    "notBefore" => 0,
    "access" => [
        "manageGroupMembership" => true,
        "view" => true,
        "mapRoles" => true,
        "impersonate" => true,
        "manage" => true
    ]
];

printArray($arrayUser);
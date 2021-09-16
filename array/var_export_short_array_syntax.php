<?php

//
// From https://gist.github.com/ajcastro/e906922f737d0aa63dfd05b29bfe2f1d
//

if (!function_exists('var_export_short_array_syntax')) {
    function var_export_short_array_syntax($var, $indent="") {
        switch (gettype($var)) {
            case "string":
                return '"' . addcslashes($var, "\\\$\"\r\n\t\v\f") . '"';
            case "array":
                $indexed = array_keys($var) === range(0, count($var) - 1);
                $r = [];
                foreach ($var as $key => $value) {
                    $r[] = "$indent    "
                         . ($indexed ? "" : var_export_short_array_syntax($key) . " => ")
                         . var_export_short_array_syntax($value, "$indent    ");
                }
                return "[\n" . implode(",\n", $r) . "\n" . $indent . "]";
            case "boolean":
                return $var ? "true" : "false";
            default:
                return var_export($var, true);
        }
    }
}

$arrayUser = [
    "id" => "98a90ad0-ef33-4905-9e0e-93836dde9ba0",
    "createdTimestamp" => 1588778409933,
    "enabled" => true,
    "attributes" => [
        "unit_system" => [
            "intl"
        ],
        "locale" => [
            "fr"
        ],
    ],
    "requiredActions" => [],
    "notBefore" => 0,
    "access" => [
        "view" => true,
        "manage" => true
    ]
];

echo var_export_short_array_syntax($arrayUser);

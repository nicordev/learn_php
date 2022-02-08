<?php

function generateOpenapiPhpdoc($key, $example = '', int $level = 0): string
{
    if (is_array($example)) {
        $arrayProperty = ' * ' . str_repeat(' ', $level * 4) . "@OA\Property(type=\"array\", property=\"$key\" @OA\Items(\n";

        foreach ($example as $key => $value) {
            $arrayProperty .= generateOpenapiPhpdoc($key, $value, $level + 1);
        }

        $arrayProperty .= ' * ' . str_repeat(' ', $level * 4) . "),\n";

        return $arrayProperty;
    }

    return ' * ' . str_repeat(' ', $level * 4) . sprintf('@OA\Property(type="string", property="%s", example="%s"),', $key, $example) . "\n";
}

function generate(array $responseParts): string
{
    $result = "/**\n";

    foreach ($responseParts as $key => $value) {
        $result .= generateOpenapiPhpdoc($key, $value);
    }

    return $result . ' */';
}

$responseParts = json_decode(file_get_contents("response.json"), true)[0];

echo generate($responseParts);

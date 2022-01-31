<?php

function getName(?string $name = null) {
    return $name;
}

echo 'hello ' . (getName($argv[1] ?? null) ?? 'world') . '!';

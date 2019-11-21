Spaceship operator

<?php

function spaceship($a, $b)
{
    return $a <=> $b;
}

echo "1 <=> 2 is " . spaceship(1, 2) . "\n";
echo "1 <=> 1 is " . spaceship(1, 1) . "\n";
echo "1 <=> 0 is " . spaceship(1, 0) . "\n";

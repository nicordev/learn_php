<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $L
);

fscanf(STDIN, "%d",
    $H
);

$T = stream_get_line(STDIN, 256 + 1, "\n");

$characters = [];

for ($i = 0; $i < $H; $i++)
{
    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
    $characters[] = $ROW;
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo(implode("\n" . $characters) . "\n");
?>
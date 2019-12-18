<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $n // the number of temperatures to analyse
);
$inputs = fgets(STDIN);
$inputs = explode(" ",$inputs);

$temperatures = [];
$absoluteValues = [];
$minValues = [];

for ($i = 0; $i < $n; $i++)
{
    $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
    $temperatures[] = $t;
    $absoluteValues[] = abs($t);
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

$minValue = min($absoluteValues);

for ($i = 0, $size = count($temperatures); $i < $size; $i++) {
    if ($absoluteValues[$i] === $minValue) {
        $minValues[] = $temperatures[$i];
    }
}

$result = getPositiveMinValue($minValues) ?? 0;

echo("$result\n");

function getPositiveMinValue($minValues) {
	foreach ($minValues as $key => $value) {
		if ($value > 0) {
			return $value;
		}
	}
	return $value;
}


?>
<?php
/*******
 * Read input from STDIN
 * Use echo or print to output your result to STDOUT, use the PHP_EOL constant at the end of each result line.
 * Use:
 *     fwrite(STDERR, "hello, world!" . PHP_EOL);
 * or
 *		error_log("hello, world!" . PHP_EOL);
 * to output debugging information to STDERR
 * ***/

do{
    $f = stream_get_line(STDIN, 10000, PHP_EOL);
    if($f!==false){
        $input[] = $f;
    }
}while($f!==false);

// My code
$baseColors = [2, 3, 5, 7, 11];
$neededColors = [];

array_shift($input);

foreach ($input as $color) {
    foreach ($baseColors as $baseColor) {
        if ($color % $baseColor === 0) {
            $neededColors[] = $baseColor;
        }
    }
}

$neededColors = array_unique($neededColors);
sort($neededColors);

echo implode(" ", $neededColors);

/* Vous pouvez aussi effectuer votre traitement ici après avoir lu toutes les données */

/* Solution
do{
    $f = stream_get_line(STDIN, 10000, PHP_EOL);
    if($f!==false){
        $input[] = $f;
    }
}while($f!==false);

$n = $input[0];
$primary_colors = [2,3,5,7,11];
$colors_needs = [];

for($i=1; $i<=$n;$i++){
    foreach($primary_colors as $primary_color){
        if($input[$i]%$primary_color == 0){
            $colors_needs[] = $primary_color;
        }
    }
}

sort($colors_needs);

echo implode(" ",array_unique($colors_needs));
 */

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

/* Vous pouvez aussi effectuer votre traitement ici après avoir lu toutes les données */


function countChild(array $ages)
{
    $children = array_filter($ages, function ($age) {
        if ($age >= 5 && $age <= 9) {
            return $age;
        }
    });

    return count($children);
}

$ages = explode(" ", $input[1]);

echo countChild($ages);

?>

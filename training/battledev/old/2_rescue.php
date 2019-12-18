<?php

do{
    $f = stream_get_line(STDIN, 10000, PHP_EOL);
    if($f!==false){
        $input[] = $f;
    }
}while($f!==false);


function rescue(array $boats, int $rescueBoatCapacity = 10)
{
    $trips = 0;

    foreach ($boats as $boat => $victims) {
        while ($victims > 0) {
            $victims -= $rescueBoatCapacity;
            $trips++;
        }
    }

    return $trips;
}

array_shift($input);

echo rescue($input);

/* Solution
do{
    $f = stream_get_line(STDIN, 10000, PHP_EOL);
    if($f!==false){
        $input[] = $f;
    }
}while($f!==false);
unset($input[0]);
$total = 0;
foreach($input as $value){
    $total += ceil($value/10);
}
echo $total;
 */

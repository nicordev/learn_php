<?php
function alternatingSums($a) {

    $team1 = [];
    $team2 = [];

    for ($i = 0, $size = count($a); $i < $count; $i++) {
        if ($i % 2 !== 0) {
            $team1[] = $a[$i];
        } else {
            $team2[] = $a[$i];
        }
    }

    return [
        array_sum($team1),
        array_sum($team2)
    ];
}


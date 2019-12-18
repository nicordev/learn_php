<?php
function makeArrayConsecutive2(array $statues) {

    sort($statues);
    $numberOfLackingStatues = 0;
    for ($i = 0, $size = count($statues); $i < $size - 1; $i++) {
        $result = $statues[$i + 1] - $statues[$i];
        if ($result > 1) {
            $numberOfLackingStatues += $result - 1;
        }
    }
    return $numberOfLackingStatues;
}

$statues = [6, 2, 3, 8];

echo makeArrayConsecutive2($statues);


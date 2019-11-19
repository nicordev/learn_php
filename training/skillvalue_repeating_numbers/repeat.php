<?php

function getRepeatingNumbers(array $numbers)
{
    $stats = array_count_values($numbers);
    $results = [];

    foreach ($stats as $value => $repetitions) {
        if ($repetitions > 1) {
            $results[] = $value;
        }
    }

    sort($results);
    $result = implode(", ", $results);

    if (empty($result)) { // SkillValue does not know the ?? operator...
        $result = 0;
    }

    return $result;
}

$data = [
    [2, 4, 5, 93, 25, 35, 24, 3, 353, 4, 535, 3, 3],
    [1, 2, 3, 4, 5],
    [2, 24, 25, 525, 24]
];

foreach ($data as $datum) {
    echo getRepeatingNumbers($datum) . "\n";
}

<?php

function getData(
    string $data,
    int &$attendeesCount,
    int &$topicsCount
) {
    $lines = explode("\n", $data);
    $data = [];

    foreach ($lines as $line) {
        $line = rtrim($line);
        if (false !== strpos($line, " ")) {
            $numbers = explode(" ", $line);
            $attendeesCount = $numbers[0];
            $topicsCount[1];
        } else {
            $data[] = $line;
        }
    }

    return $data;
}

// Complete the acmTeam function below.
function acmTeam($topic) {

    $attendees = $topic;
    $compositions = [];

    for ($i = 0, $attendeesCount = count($attendees); $i < $attendeesCount - 1; $i++) {
        for ($j = $i + 1; $j < $attendeesCount; $j++) {
            $compositions["$i $j"] = sumOfTwoAttendees($attendees[$i], $attendees[$j]);
        }
    }

    $maxTopicsPossiblyKnown = max($compositions);
    $teamsKnowingMaxTopics = count(array_keys($compositions, $maxTopicsPossiblyKnown));

    return [$maxTopicsPossiblyKnown, $teamsKnowingMaxTopics];
}

function sumOfTwoAttendees(string $attendeeA, string $attendeeB)
{
    $sum = 0;

    for ($i = 0, $size = strlen($attendeeA); $i < $size; $i++) {
        if ($attendeeA[$i] == 1 || $attendeeB[$i] == 1) {
            $sum++;
        }
    }

    return $sum;
}

$data = [
    "4 5
10101
11100
11010
00101"
];
$attendeesCount = 0;
$topicsCount = 0;

foreach ($data as $datum) {
    $lines = getData($datum, $attendeesCount, $topicsCount);
//    array_shift($lines);

    echo implode(" ", acmTeam($lines)) . "\n";
}

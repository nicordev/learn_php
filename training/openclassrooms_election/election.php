<?php

/*
 * OpenClassrooms
 *
 * https://openclassrooms.com/fr/courses/4366701-decouvrez-le-fonctionnement-des-algorithmes/4385470-codez-lalgorithme-en-python
 */

function generateAVote(array &$candidates, int $mentionCount)
{
    $vote = [];

    foreach ($candidates as $candidate) {
        $vote[$candidate] = mt_rand(0, $mentionCount - 1);
    }

    return $vote;
}

function generateVotes(int $voteCount, array $candidates, array $mentions)
{
    $mentionCount = count($mentions);
    $votes = [];

    for ($i = 1; $i <= $voteCount; $i++) {
        $votes[] = generateAVote($candidates, $mentionCount);
    }

    return $votes;
}

function calculateScores(array $candidates, array &$votes, int $mentionCount)
{
    $scores = [];

    foreach ($candidates as $candidate) {
        for ($i = 0; $i < $mentionCount; $i++) {
            $scores[$candidate][] = 0;
        }
    }

    foreach ($votes as $vote) {
        foreach ($vote as $candidate => $note) {
            $scores[$candidate][$note]++;
        }
    }

    return $scores;
}

function calculateMedians(array $scores)
{
    $voteCount = array_sum(current($scores));
    $threshold = $voteCount / 2;
    $results = [];

    foreach ($scores as $candidate => $mentions) {
        $count = 0;
        foreach ($mentions as $mention => $mentionCount) {
            $count += $mentionCount;
            if ($count >= $threshold) {
                $results[$candidate][] = [$mention => $count];
            }
        }
    }

    return $results;
}

$candidates = [
    "hermione",
    "balou",
    "chuck-norris",
    "elsa",
    "gandalf",
    "beyonce"
];
$mentions = array_reverse([
    "Excellent",
    "Très bien",
    "Bien",
    "Assez Bien",
    "Passable",
    "Insuffisant",
    "A rejeter"
]);

$voteCount = 100;
$votes = generateVotes($voteCount, $candidates, $mentions);
$scores = calculateScores($candidates, $votes, count($mentions));
$medians = calculateMedians($scores);

var_dump($medians);

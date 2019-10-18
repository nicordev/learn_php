<?php

/*
 * OpenClassrooms
 *
 * https://openclassrooms.com/fr/courses/4366701-decouvrez-le-fonctionnement-des-algorithmes/4385470-codez-lalgorithme-en-python
 */


function generateAVote(array $candidates, array $mentions)
{
    $vote = [];

    foreach ($candidates as $candidate) {
        $vote[$candidate] = array_pop(array_splice($mentions, mt_rand(0, count($mentions) - 1), 1));
    }

    return $vote;
}

function generateVotes(int $voteCount)
{
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
    $votes = [];
    $mentionWeights = [];

    for ($i = 0, $size = count($mentions); $i < $size; $i++) {
        $mentionWeights[$mentions[$i]] = $i;
    }

    for ($i = 1; $i <= $voteCount; $i++) {
        $votes[] = generateAVote($candidates, $mentionWeights);
    }

    return $votes;
}

function calculateScores(array $votes)
{
    $scores = [];

    foreach ($votes as $vote) {
        foreach ($vote as $candidate => $score) {
            $scores[$candidate] += $score;
        }
    }

    return $scores;
}

$voteCount = 100;
$votes = generateVotes($voteCount);
$scores = calculateScores($votes);

var_dump($scores);
<?php

/*
 * HackerRank - 30 days of code challenge
 */

function solve($meal_cost, $tip_percent, $tax_percent) {

    $tip = $meal_cost * $tip_percent / 100;
    $tax = $meal_cost * $tax_percent / 100;
    $totalCost = $meal_cost + $tip + $tax;

    echo round($totalCost, 0);
}
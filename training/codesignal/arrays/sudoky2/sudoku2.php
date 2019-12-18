<?php

$pageTitle = "sudoku2";

function sudoku2($grid) {

    $columns = [];

    foreach ($grid as $rowNumber => $row) {
        if (hasDuplicates($row)) {
            return false;
        }
        foreach ($row as $colNumber => $cell) {
            $columns[$colNumber][$rowNumber] = $cell;
        }
    }

    foreach ($columns as $column) {
        if (hasDuplicates($column)) {
            return false;
        }
    }

    return check3x3Arrays($grid);
}

function hasDuplicates(array $array) {

    $values = [];

    foreach ($array as $item) {
        if ($item !== ".") {
            $values[] = $item;
        }
    }

    if (count(array_unique($values)) === count($values)) {
        return false;
    }
    return true;
}

function check3x3Arrays(array $array) {

    for ($row = 0; $row < 9; $row += 3) {
        for ($col = 0; $col < 9; $col += 3) {
            $smallArray = get3x3Array($array, $row, $col);
            if (!check3x3($smallArray)) {
                return false;
            }
        }
    }

    return true;
}

function get3x3Array(array $array, int $row, int $col) {

    $smallArray = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $smallArray[$row + $i][$col + $j] = $array[$row + $i][$col + $j];
        }
    }
    return $smallArray;
}

function check3x3(array $array3x3) {

    $rows = [];
    foreach ($array3x3 as $row) {
        $rows[] = implode('-', $row);
    }
    $cells = implode('-', $rows);

    for ($i = 1; $i <= 9; $i++) {
        if (substr_count($cells, strval($i)) > 1) {
            return false;
        }
    }
    return true;
}



/**
 * Print an array of array
 *
 * @param array $array
 */
function myPrint(array $array) {

    echo '<table>';
    echo '<tr>';
    foreach ($array as $item)  {
        if (is_array($item)) {
            echo '<td>' . myPrint($item) . '</td>';

        } else {
            echo '<td>' . $item . '</td>';
        }
    }
    echo '</tr>';
    echo '</table>';
}

$test1True =
    [['.', '.', '.', '1', '4', '.', '.', '2', '.'],
    ['.', '.', '6', '.', '.', '.', '.', '.', '.'],
    ['.', '.', '.', '.', '.', '.', '.', '.', '.'],
    ['.', '.', '1', '.', '.', '.', '.', '.', '.'],
    ['.', '6', '7', '.', '.', '.', '.', '.', '9'],
    ['.', '.', '.', '.', '.', '.', '8', '1', '.'],
    ['.', '3', '.', '.', '.', '.', '.', '.', '6'],
    ['.', '.', '.', '.', '.', '7', '.', '.', '.'],
    ['.', '.', '.', '5', '.', '.', '.', '7', '.']];

$test2False =
    [['.', '.', '.', '.', '2', '.', '.', '9', '.'],
    ['.', '.', '.', '.', '6', '.', '.', '.', '.'],
    ['7', '1', '.', '.', '7', '5', '.', '.', '.'],
    ['.', '7', '.', '.', '.', '.', '.', '.', '.'],
    ['.', '.', '.', '.', '8', '3', '.', '.', '.'],
    ['.', '.', '8', '.', '.', '7', '.', '6', '.'],
    ['.', '.', '.', '.', '.', '2', '.', '.', '.'],
    ['.', '1', '.', '2', '.', '.', '.', '.', '.'],
    ['.', '2', '.', '.', '3', '.', '.', '.', '.']];

$test3False =
    [['.', '.', '.', '.', '2', '.', '.', '9', '.'],
    ['.', '.', '.', '.', '6', '.', '.', '.', '.'],
    ['7', '1', '.', '.', '2', '5', '.', '.', '.'],
    ['.', '7', '.', '.', '.', '.', '.', '.', '.'],
    ['.', '.', '.', '.', '8', '3', '.', '.', '.'],
    ['.', '.', '8', '.', '.', '7', '.', '6', '.'],
    ['.', '.', '.', '.', '.', '2', '.', '.', '.'],
    ['.', '1', '.', '2', '.', '.', '.', '.', '.'],
    ['.', '2', '.', '.', '3', '.', '.', '.', '.']];

$test7False =
    [[".","4",".",".",".",".",".",".","."],
    [".",".","4",".",".",".",".",".","."],
    [".",".",".","1",".",".","7",".","."],
    [".",".",".",".",".",".",".",".","."],
    [".",".",".","3",".",".",".","6","."],
    [".",".",".",".",".","6",".","9","."],
    [".",".",".",".","1",".",".",".","."],
    [".",".",".",".",".",".","2",".","."],
    [".",".",".","8",".",".",".",".","."]];

$test8False =
    [[".",".","5",".",".",".",".",".","."],
    [".",".",".","8",".",".",".","3","."],
    [".","5",".",".","2",".",".",".","."],
    [".",".",".",".",".",".",".",".","."],
    [".",".",".",".",".",".",".",".","9"],
    [".",".",".",".",".",".","4",".","."],
    [".",".",".",".",".",".",".",".","7"],
    [".","1",".",".",".",".",".",".","."],
    ["2","4",".",".",".",".","9",".","."]];

$test12False =
    [[".",".",".",".",".",".","5",".","."],
    [".",".",".",".",".",".",".",".","."],
    [".",".",".",".",".",".",".",".","."],
    ["9","3",".",".","2",".","4",".","."],
    [".",".","7",".",".",".","3",".","."],
    [".",".",".",".",".",".",".",".","."],
    [".",".",".","3","4",".",".",".","."],
    [".",".",".",".",".","3",".",".","."],
    [".",".",".",".",".","5","2",".","."]];

$tests = [$test1True, $test2False, $test3False, $test7False, $test8False, $test12False];
$results = [true, false, false, false, false, false];

ob_start();

    foreach ($tests as $key => $value) {
        var_dump(sudoku2($value), $results[$key]);
        echo '<hr>';
    }

//sudoku2($test12False);

$content = ob_get_clean();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $pageTitle ?></title>
    <style>
        td {
            border-collapse: collapse;
            border: 1px solid slategrey;
        }
    </style>
</head>

    <body>
        <?= $content ?>
    </body>
</html>


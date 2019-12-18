<?php

$pageTitle = "rotateImage";

function rotateImage($a) {

    for ($i = 0, $lines = count($a); $i < $lines; $i++) {
        for ($j = 0, $columns = count($a[0]); $j < $columns; $j++) {
            $rotated[$j][$i] = $a[$i][$j];
        }
    }

    foreach ($rotated as &$line) {
        $line = array_reverse($line);
    }

    return $rotated;
}

function myPrint(array $array) {

    echo '<table>';
    echo '<tr>';
    for ($i = 0, $lines = count($array); $i < $lines; $i++) {
        if (is_array($array[$i])) {
            echo '<td>' . myPrint($array[$i]) . '</td>';

        } else {
            echo '<td>' . $array[$i] . '</td>';
        }
    }
    echo '</tr>';
    echo '</table>';
}

$a = [[1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]];

$b = rotateImage($a);

ob_start();

    myPrint($a);
    echo '<hr>';
    myPrint($b);

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

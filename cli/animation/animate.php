<?php

/**
 * Clear the console screen using the ANSI Escape character chr(27)
 *
 * @return void
 */
function clearScreen()
{
    print chr(27) . "[2J";
}

/**
 * Move cursor to upper left corner
 *
 * @return void
 */
function returnToStart()
{
    print chr(27) . '[H'; // Or [;H
}

function getShape()
{
    $shapes = [
"
  **
 ****
******
 ****
  **
",
'
Hello world!
',
"
---
---
---
",
    ];
    $i = 0;

    while (true) {
        yield ++$i . "\n" . $shapes[array_rand($shapes)];
    }
}

foreach (getShape() as $shape) {
    clearScreen();
    returnToStart();
    echo $shape;
    sleep(1);
}

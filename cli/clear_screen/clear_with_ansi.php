<?php
/**
 * http://ascii-table.com/ansi-escape-sequences-vt-100.php
 * http://forum.codecall.net/topic/59142-how-to-clear-the-console-screen-with-ansi-any-language/
 */

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

print str_repeat("zogzog\n", 5);
sleep(1);
clearScreen();
returnToStart();
print("Cleared!\n");

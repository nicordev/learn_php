<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$boostUsed = false;

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d %d %d %d %d %d",
        $x,
        $y,
        $nextCheckpointX, // x position of the next check point
        $nextCheckpointY, // y position of the next check point
        $nextCheckpointDist, // distance to the next checkpoint
        $nextCheckpointAngle // angle between your pod orientation and the direction of the next checkpoint
    );
    fscanf(STDIN, "%d %d",
        $opponentX,
        $opponentY
    );

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    if ($nextCheckpointAngle > 90 || $nextCheckpointAngle < -90) {
        $thrust = 0;
    } else {
        if (!$boostUsed && $nextCheckpointDist > 200) {
            $thrust = "BOOST";
            $boostUsed = true;
        } else {
            $thrust = 100;
        }
    }

    // You have to output the target position
    // followed by the power (0 <= thrust <= 100)
    // i.e.: "x y thrust"
    echo ($nextCheckpointX . " " . $nextCheckpointY . " " . $thrust . "\n");
}
?>
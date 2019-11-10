<?php

class App
{
    public const WELCOME = "
Timer
-----

";
    public const GOOD_BYE = "Bye!";
    public const DURATION_EXPLANATION = "Enter the duration as following:
    - only seconds (s),
    - minutes and seconds (mm:ss)
    - hours, minutes and seconds (hh:mm:ss)
";
    public const DURATION_QUESTION = "How long?";

    public function run()
    {
        $this->welcome();

        while (1) {
            if (!$this->runTimer()) {
                break;
            }
        }

        $this->goodBye();
    }

    public function welcome()
    {
        echo self::WELCOME;
    }

    public function runTimer()
    {
        try {
            $duration = $this->askDuration();
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }

        $answer = $this->ask("Do you want to start the timer now? (y or n) ");

        if ($answer !== "y") {
            return false;
        }

        $this->start($duration);
    }

    public function goodBye()
    {
        echo self::GOOD_BYE . "\n";
    }

    private function start(DateInterval $duration)
    {
        $current = $previous = new DateTime();
        $end = $current->add($duration);
        $countdown = [$duration->h, $duration->i, $duration->s];

        while ($end >= $current = new DateTime()) {
            echo implode(":", $countdown) . "\n";
            $previous = $current;
        }
    }

    private function ask(string $question)
    {
        echo "$question ";
        return rtrim(fgets(STDIN));
    }

    private function askDuration()
    {
        echo self::DURATION_EXPLANATION;

        $answer = $this->ask(self::DURATION_QUESTION);

        if (!preg_match("#^\d+(:\d+){0,2}$#", $answer)) {
            throw new Exception("Bad input for duration.");
        }

        $durationParts = explode(":", $answer);
        $durationPartsCount = count($durationParts);

        if ($durationPartsCount > 3 || $durationPartsCount <= 0) {
            throw new Exception("$durationPartsCount duration parts. Should be between 1 and 3.");
        }

        $second = $minute = $hour = 0;

        switch ($durationPartsCount) {
            case 1:
                return new DateInterval("PT{$durationParts[0]}S");
                break;
            case 2:
                return new DateInterval("PT{$durationParts[0]}M{$durationParts[1]}S");
                break;
            default:
                return new DateInterval("PT{$durationParts[0]}H{$durationParts[1]}M{$durationParts[2]}S");
        }
    }
}

$app = new App();

$app->run();

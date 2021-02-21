<?php

require __DIR__.'/DateComparator/DateComparator.php';

class Tester
{
    public array $messages = [];

    public function printMessages()
    {
        echo "\n\n";
        echo implode("\n", $this->messages);
        echo "\n";
    }

    public function addMessage(string $message)
    {
        $this->messages[] = $message;
    }

    public function assertEquals($expected, $actual) {
        if ($expected === $actual) {
            echo ".";
            return;
        }
        echo 'F';
        $expected = $this->prepareVariable($expected);
        $actual = $this->prepareVariable($actual);
        $this->addMessage("Broken: {$actual} is not equal to {$expected}");
    }

    private function prepareVariable($variable)
    {
        return var_export($variable, true);
    }
}

$tester = new Tester();

$dateFormat = 'Y-m-d';
$comparator = new DateComparator();
$now = new DateTimeImmutable();
$futureDate = $now->add(new DateInterval('P3D'));
$pastDate = $now->sub(new DateInterval('P3D'));

$tester->assertEquals(DateComparator::IS_AFTER, $comparator->compare2Dates($now, $pastDate));
$tester->assertEquals(DateComparator::IS_SAME, $comparator->compare2Dates($now, $now));
$tester->assertEquals(DateComparator::IS_BEFORE, $comparator->compare2Dates($now, $futureDate));

$tester->printMessages();
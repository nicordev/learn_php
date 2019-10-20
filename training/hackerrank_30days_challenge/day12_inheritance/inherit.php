<?php

/*
 * HackerRank challenge day 12
 *
 * https://www.hackerrank.com/challenges/30-inheritance/problem?h_r=email&unlock_token=8528a3fed1a70442566e26fa6d38eb9576071fe5&utm_campaign=30_days_of_code_continuous&utm_medium=email&utm_source=daily_reminder
 */

class Person {
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends Person {
    private $testScores;

    /*
    *   Class Constructor
    *
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    public function __construct(
        string $firstName,
        string $lastName,
        int $id,
        array $scores
    ) {
        parent::__construct($firstName, $lastName, $id);
        $this->testScores = $scores;
    }

    /*
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    public function calculate()
    {
        $average = array_sum($this->testScores) / count($this->testScores);

        if ($average >= 90) {
            return "O";
        }
        if ($average >= 80) {
            return "E";
        }
        if ($average >= 70) {
            return "A";
        }
        if ($average >= 55) {
            return "P";
        }
        if ($average >= 40) {
            return "D";
        }
        return "T";
    }
}

$first_name = "Heraldo";
$last_name = "Memelli";
$id = 8135627;

$scores = array_map(function ($element) {
        return (int) $element;
    },
    explode(' ', "100 80")
);

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");

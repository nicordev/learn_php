<?php

class Interrogator
{
    public function ask(string $question)
    {
        echo "$question ";
        return rtrim(fgets(STDIN));
    }
}
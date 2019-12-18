<?php

function feedListOfNames(array &$list, string $name, string $email)
{
    if (preg_match("#^.+@gmail.com$#", $email)) {
        $list[] = $name;
    }
}

function run()
{
    $data = "riya riya@gmail.com
julia sjulia@gmail.com
julia julia@gmail.com
julia julia@julia.me
samantha samantha@gmail.com
tanya tanya@gmail.com";

    $rows = explode("\n", $data);
    $users = [];

    foreach ($rows as $row) {
        $users[] = explode(" ", $row);
    }

    $names = [];

    foreach ($users as $user) {
        feedListOfNames($names, $user[0], $user[1]);
    }

    sort($names);

    echo implode("\n", $names);
}

run();
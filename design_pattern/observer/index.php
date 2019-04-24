<?php

require "src/MyFalseMailer/MyFalseMailer.php";

$mailer = new \App\MyFalseMailer();
$mailer->sendMail("zog", "Hello world!");
<?php

namespace App;

interface MailerInterface
{
    /**
     * @param string $to
     * @param string $subject
     * @param string $content
     * @param string $from
     * @return mixed
     */
    public function sendMail(string $to, string $subject, string $content = "", string $from = "");
}
<?php

namespace App\MyFakeMailer;

use App\MailerInterface;

class MyFakeMailer implements MailerInterface
{
    public function sendMail(string $to, string $subject, string $content = "", string $from = "")
    {
        $now = new \DateTime();
        $now = $now->format('Y-m-d H:i:s');
        echo self::wrapTag(
            self::wrapTag("$now Mail sent!", "h3") .
            self::wrapTag("To: $to", "p") .
            self::wrapTag("From: $from", "p") .
            self::wrapTag("Subject:", "h4") .
            self::wrapTag($subject, "p") .
            self::wrapTag("Content:", "h4") .
            self::wrapTag($content, "p")
        );
    }

    public static function wrapTag(string $content, string $tag = "div")
    {
        return "<$tag>$content</$tag>";
    }
}
<?php

namespace App\MailSender;

use App\MailerInterface;
use DPObserver\Subscriber\Subscriber;
use SplSubject;

class MailSender extends Subscriber
{
    /**
     * @var MailerInterface
     */
    private $mailer;
    /**
     * @var array
     */
    private $destinationEmails;
    /**
     * @var string
     */
    private $from;

    public function __construct(MailerInterface $mailer, array $destinationEmails, string $from = "")
    {
        $this->mailer = $mailer;
        $this->destinationEmails = $destinationEmails;
        $this->from = $from;
    }

    // SplObserver Interface

    /**
     * Receive update from subject
     * @link https://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        foreach ($this->destinationEmails as $destinationEmail) {
            $this->mailer->sendMail($destinationEmail, $subject->subject, $subject->content, $this->from);
        }
    }
}
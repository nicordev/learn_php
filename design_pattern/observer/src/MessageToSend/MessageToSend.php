<?php

namespace App\MessageToSend;

use DPObserver\Publisher\Publisher;

class MessageToSend extends Publisher
{
    /**
     * @var string
     */
    public $subject;
    /**
     * @var string
     */
    public $content;

    /**
     * Informant constructor.
     * @param string $subject
     * @param string $content
     */
    public function __construct(string $subject, string $content = "")
    {
        $this->subject = $subject;
        $this->content = $content;
    }
}
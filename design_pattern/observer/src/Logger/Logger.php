<?php

namespace App\Logger;

use App\MessageToSend\MessageToSend;
use DPObserver\Subscriber\Subscriber;
use SplSubject;

class Logger extends Subscriber
{
    /**
     * @var string
     */
    private $logFileName;
    /**
     * @var string
     */
    public $data;

    /**
     * Logger constructor.
     *
     * @param string $logFileName the full name of the log file (with its path)
     * @param string $dataToLog
     */
    public function __construct(string $logFileName, string $dataToLog = "")
    {
        $this->logFileName = $logFileName;
        $this->data = $dataToLog;
    }

    /**
     * Add data in the log file
     */
    public function addLog()
    {
        $data = date("Y-m-d H:i:s") . " client: " . ($_SERVER['REMOTE_ADDR'] ?? "") . " message: " . $this->data;
        file_put_contents($this->logFileName, $data . "\n", FILE_APPEND);
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
     * @throws \Exception
     */
    public function update(SplSubject $subject)
    {
        if ($subject instanceof MessageToSend) {
            $this->data = $subject->subject;
            $this->addLog();
        } else {
            throw new \Exception(self::class . " has not been attached to a " . MessageToSend::class);
        }
    }
}
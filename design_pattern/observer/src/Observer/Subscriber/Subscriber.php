<?php

namespace DPObserver\Subscriber;

use SplSubject;

/**
 * Class Subscriber (can also be called an Observer)
 *
 * @package DPObserver
 */
abstract class Subscriber implements \SplObserver
{
    /**
     * Receive update from subject
     * @link https://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    abstract public function update(SplSubject $subject);
}
<?php

use App\Logger\Logger;
use App\MailSender\MailSender;
use App\MessageToSend\MessageToSend;
use App\MyFakeMailer\MyFakeMailer;

require "autoload/autoload.php";

// Subscribers
$mailer = buildFakeMailer();
$logger = new Logger("hello.log", "This text should never be logged");

// Launch the system!
if (isset($_POST['subject']) && !empty($_POST['subject'])) {
    // Publisher
    $message = new MessageToSend(
        htmlspecialchars($_POST['subject']),
        htmlspecialchars($_POST['content'])
    );
    $message->attach($mailer);
    $message->attach($logger);
    $message->notify();
}

// Throw an exception!
if (isset($_GET['test']) && $_GET['test'] === "update") {
    $coffeeCup = new class extends \DPObserver\Publisher\Publisher
    {
        public $isHot = true;
    };

    // We attach a wrong Subscriber
    $coffeeCup->attach($logger);
    try {
        $coffeeCup->notify();
    } catch (Exception $e) {
        echo "<h2 style='color: red;'>Error: " . $e->getMessage() . "</h2>";
    }
}

// Not relevant
function buildFakeMailer()
{
    $destinationEmails = [
        "zogzog@gmail.com",
        "lenny.bards@gmail.com",
        "sarah.croche@gmail.com"
    ];
    return new MailSender(
        new MyFakeMailer(),
        $destinationEmails,
        "me@gmail.com"
    );
}

?>

<h1>Design pattern Observer</h1>

<form action="" method="post">
    <div>
        <input type="text" name="subject" placeholder="Subject">
    </div>
    <div>
        <textarea name="content" cols="30" rows="10" placeholder="Message"></textarea>
    </div>

    <button>Send this message!</button>
</form>

<p>
    <a href="?test=update">Throw an exception!</a>
</p>
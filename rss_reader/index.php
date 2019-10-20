<?php
$url = "https://feeds.feedburner.com/symfony/blog";

$curlSession = curl_init(); // Initialise curl

curl_setopt($curlSession, CURLOPT_URL, $url); // Set the requested url
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true); // We only want a string

$response = curl_exec($curlSession); // Send the request

$xml = new SimpleXMLElement($response); // The response content is XML

// Now read the news!

echo "RSS reading\n";
echo str_repeat("-", 11) . "\n\n";
echo "URL used: $url\n\nNews:\n";

foreach ($xml->channel->item as $element) {
    echo "{$element->title}\n";
}

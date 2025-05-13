<?php

include "chat.js";
function sendTextMessage($message) {
    // Code for sending text message
    echo "Sending text message: " . $message . "\n";
}

function sendImageMessage($imageUrl) {
    // Code for sending image message
    echo "Sending image message: " . $imageUrl . "\n";
}

function sendAudioMessage($audioUrl) {
    // Code for sending audio message
    echo "Sending audio message: " . $audioUrl . "\n";
}

function processMessage($message) {
    // Process the received message
    if (strpos($message, 'text:') === 0) {
        $text = substr($message, strlen('text:'));
        sendTextMessage(trim($text));
    } elseif (strpos($message, 'image:') === 0) {
        $imageUrl = substr($message, strlen('image:'));
        sendImageMessage(trim($imageUrl));
    } elseif (strpos($message, 'audio:') === 0) {
        $audioUrl = substr($message, strlen('audio:'));
        sendAudioMessage(trim($audioUrl));
    } else {
        echo "Invalid message format.\n";
    }
}

// Example usage
// processMessage("text:Hello, how are you?");
// processMessage("image:http://example.com/image.jpg");
// processMessage("audio:http://example.com/audio.mp3");

?>
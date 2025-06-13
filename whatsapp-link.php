<?php
function generateWhatsAppLink($phoneNumber, $message = '') {
    $baseUrl = 'https://wa.me/';
    $encodedMessage = urlencode($message);
    return $baseUrl . $phoneNumber . '?text=' . $encodedMessage;
}
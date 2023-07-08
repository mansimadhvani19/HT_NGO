<?php

    require 'vendor/autoload.php'; // Include the SendGrid library

    $apiKey = 'YOUR_SENDGRID_API_KEY'; // Replace with your SendGrid API key

    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("sender@example.com", "Sender Name");
    $email->setSubject("Email Subject");
    $email->addTo("recipient@example.com", "Recipient Name");
    $email->addContent("text/plain", "Email content");

    $sendgrid = new \SendGrid($apiKey);

    try {
        $response = $sendgrid->send($email);
        if ($response->statusCode() === 202) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email: " . $response->statusCode();
        }
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $parts = explode("@", $email);
    $subscriber_name = ucfirst($parts[0]); 

    $to_admin = "info@codeaxe.co.in"; 
    $subject_admin = "New subscriber";
    $message_admin = "A new user subscribed with the email: $email";
    $headers_admin = "From: info@codeaxe.co.in"; 
    

    // Send email to subscriber
    $to_subscriber = $email;
    $subject_subscriber = "Thank you for subscribing";
$message_subscriber = "Dear $subscriber_name,\n\nWelcome to our newsletter! We're thrilled to have you join us. Stay tuned for exciting updates, offers, and news.\n\nThank you for subscribing!";
    $headers_subscriber = "From: info@codeaxe.co.in"; 
    
    
    
    if (mail($to_admin, $subject_admin, $message_admin, $headers_admin) && mail($to_subscriber, $subject_subscriber, $message_subscriber, $headers_subscriber)) {
        header("Location: index.html");
        exit;
    } else {
        echo "Failed to send email.";
    }
}
?>

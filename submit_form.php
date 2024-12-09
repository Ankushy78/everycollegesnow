<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare the email
        $to = "yadavankush674890@gmail.com";  // Replace with your email
        $subject = "New Contact Us Form Submission";
        $body = "You have received a new message from your website contact form.\n\n".
                "Name: $name\n".
                "Email: $email\n".
                "Message:\n$message";

        $headers = "From: $email";

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for contacting us! Your message has been sent.";
        } else {
            echo "Sorry, there was an issue with sending your message. Please try again later.";
        }
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 2. Email details
    $to = "gastyw.96@hotmail.com"; // Replace with your actual email address
    $subject = "New Contact Form Submission";
    $email_message = "
    Name: $name
    Email: $email
    Message: $message
    ";
    $headers = "From: gastyw3.96@hotmail.com"; // Replace with your website's domain or a valid email

    // 3. Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Gracias por contaactarnos, un miempbro de nuestro equipo se pondra en contacto pronto";
    } else {
        echo "Ups hubo algun error mandando tu mensaje, intenta de nuevo. Si el problema persiste, contactanos directamente por mail o por instagram.";
    }
} else {
    // If the form is not submitted, redirect or display an error
    echo "Invalid request.";
}
?>
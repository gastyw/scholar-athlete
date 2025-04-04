<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Get form data
    $name = $_POST['question1'];
    $email = $_POST['question2'];
    $phone = $_POST['question3'];
    $age = $_POST['question4'];
    $year = $_POST['question5'];
    $sport = $_POST['question6'];
    $achievements = $_POST['question7'];

    // 2. Email details
    $to = "gastyw.96@hotmail.com"; // Replace with your actual email address
    $subject = "New Evaluation Form Submission";
    $message = "
    Name: $name
    Email: $email
    Phone: $phone
    Age: $age
    Year: $year
    Sport: $sport
    Achievements: $achievements
    ";
    $headers = "From: gastyw3.96@hotmail.com"; // Replace with your website's domain or a valid email

    // 3. Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Gracias, un miembro de nuestro equipo se pondra en contacto pronto!";
    } else {
        echo "Ups hubo algun error mandando tu mensaje, intenta de nuevo. Si el problema persiste, contactanos directamente por mail o por instagram.";
    }
} else {
    // If the form is not submitted, redirect or display an error
    echo "Invalid request.";
}
?>
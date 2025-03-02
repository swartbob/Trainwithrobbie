<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Email setup
    $to = "roswart01@gmail.com"; // Replace with your email address
    $subject = "Free Warm-Up Request";
    $message = "Name: $name\nEmail: $email\n\nThey have requested the free warm-up PDF.";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to the PDF file
        header("Location: warm-up.pdf");
        exit();
    } else {
        echo "There was an issue sending your email. Please try again.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // Get the form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $country = $_POST["country"];
    $subject = $_POST["subject"];
    $comment = $_POST["comment"];
 echo $fname;
    // Compose the email message
    $to = "ridoysheikh15@gmail.com";
    $subject = "Contact Form Submission: " . $subject;
    $message = "First Name: $fname\n";
    $message .= "Last Name: $lname\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $mobile\n";
    $message .= "Country: $country\n";
    $message .= "Comment: $comment\n";

    // Send the email
    $headers = "From: $email\r\n";
    if (mail($to, $subject, $message, $headers)) {
       return http_response_code(200);
    } else {
        return http_response_code(500);
    }
} else {
    return http_response_code(405); // Method Not Allowed
}
?>
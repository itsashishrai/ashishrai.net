<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "contact@ashishrai.net";  // CHANGE THIS
    $subject = "New Message from Portfolio Website";

    $body = "
    You have received a new message:

    Name: $name
    Email: $email
    Message: $message
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $body, $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }

} else {
    echo "Invalid request.";
}

?>
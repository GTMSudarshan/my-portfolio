<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "realgtm2062@gmail.com";  

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subjectMessage = $_POST["subject"];
  $message = $_POST["message"];

  $emailContent = "Name: $name\n";
  $emailContent .= "Email: $email\n";
  $emailContent .= "Subject: $subjectMessage\n";
  $emailContent .= "Message: $message\n";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  $success = mail($to, $subjectMessage, $emailContent, $headers);

  if ($success) {
    echo "Thank you for your message! We will get back to you soon.";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>

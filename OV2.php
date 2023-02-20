<?php
if ($_POST) {
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $to = "skenderrakaj9@gmail.com";
  $headers = "From: $email" . "\r\n";
  if (mail($to, $subject, $message, $headers)) {
    echo "<p style='text-align: center; font-size: 16px;'>Deine E-Mail wurde erfolgreich gesendet!</p>";
  } else {
    echo "<p style='text-align: center; font-size: 16px;'>Es ist ein Fehler aufgetreten. Bitte versuche es später erneut.</p>";
  }
}
?>

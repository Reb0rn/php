
<?php

$to      = 'testest@lotus.by';
$subject = 'тест!';
$message = ' тест';
$headers = 'From: test@post' . "\r\n" .
    'Reply-To: Ad_n@post' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo "Message SENT!";

?>




<?php
$to = "9920103066@mail.jiit.ac.in";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
if (mail($to, $subject, $txt))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>
<?php




$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

if(
    empty($name) ||
    empty($email) ||
    empty($subject) ||
    empty($message)
) {

    echo "<h1>Error</h1>";

    echo "<p>All fields are required.</p>";

    echo "<a href='index.html'>Go Back</a>";

    exit;
}

echo "<h1>Thank You, $name!</h1>";

echo "<p>Your message has been received successfully.</p>";

echo "<h3>Message Summary</h3>";

echo "<p><strong>Email:</strong> $email</p>";

echo "<p><strong>Subject:</strong> $subject</p>";

echo "<p><strong>Message:</strong> $message</p>";

?>
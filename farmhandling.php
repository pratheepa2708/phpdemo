<!DOCTYPE html>
<html>
<head>
<title>Form Handling</title>
</head>
<body>
<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the user's input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // Display the submitted data
    echo "<h2>Your Information</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
} else {
    // Display the form if it hasn't been submitted yet
    ?>
<h1>Contact Form</h1> 
<form method="post" action=""> 
<label for="name">Name:</label><br> 
<input type="text" id="name" name="name"><br><br> 
<label for="email">Email:</label><br> 
<input type="email" id="email" name="email"><br><br> 
<label for="message">Message:</label><br> 
<textarea id="message" name="message" rows="5" cols="40"></textarea><br><br> <input type="submit" name="submit" value="Submit"> 
</form> 
<?php 
} 
?> 
</body> 
</html> 

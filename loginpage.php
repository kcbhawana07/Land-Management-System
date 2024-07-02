<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $password= htmlspecialchars($_POST['password']);

    echo "<h2>Form Submitted</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $password;
} else {
    echo "Form submission error.";
}
?>

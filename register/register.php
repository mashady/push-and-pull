<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($name && $email && $password) {
    echo "Registration Successful for $name!";
} else {
    echo "Please fill in all fields.";
}
?>
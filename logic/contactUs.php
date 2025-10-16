<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $phone   = trim($_POST['phone']);
    $message = trim($_POST['message']);

    if ($name != "" && $email != "" && $message != "") {
        $stmt = $conn->prepare("INSERT INTO contact_us (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $message);
        if ($stmt->execute()) {
            echo "<span class='text-success'>Your message has been sent successfully!</span>";
        } else {
            echo "<span class='text-danger'>Failed to save your message. Please try again.</span>";
        }
        $stmt->close();
    } else {
        echo "<span class='text-danger'>Please fill in all required fields.</span>";
    }
} else {
    echo "<span class='text-danger'>Invalid request.</span>";
}
?>
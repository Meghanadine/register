<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);

    echo "<div style='width: 50%; margin: 50px auto; padding: 20px; border-radius: 8px; background-color: #e9ffe5; border: 2px solid #28a745;'>
        <h2>Registration Successful</h2>
        <p><strong>Full Name:</strong> $name</p>
        <p><strong>Email Address:</strong> $email</p>
        <p><strong>Phone Number:</strong> $phone</p>
        <p><strong>Date of Birth:</strong> $dob</p>
    </div>";
} else {
    echo "Invalid request.";
}
?>

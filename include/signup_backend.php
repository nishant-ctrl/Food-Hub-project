<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // First, check if a user with this email already exists
    $checkStmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkStmt->bind_param("s", $email); // Bind the email to the query
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        // If the user already exists, show an alert
        echo "<script>alert('User with this email already exists. Please use another email or login.'); window.location.href='../signup.php';</script>";
    } else {
        // If no user exists with this email, proceed with registration
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password); // 'sss' indicates 3 strings

        if ($stmt->execute()) {
            echo "<script>alert('Signup successful! Please login.'); window.location.href='../login.php';</script>";
            exit();
        } else {
            // Handle SQL execution errors
            echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='../register.php';</script>";
        }
        $stmt->close();
    }

    // Close the check statement after execution
    $checkStmt->close();
}
?>

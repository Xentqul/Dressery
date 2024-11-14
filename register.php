<!-- register.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration | DRESSERY</title>
</head>

<body>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Hash the password before saving it to the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<p class='success'>Registration successful!</p>";
    } else {
        echo "<p class='error'>Error: " . $stmt->error . "</p>";
    }
}
?>

<p class="goToMain AfterRegistration"><a href="index.php">←home</a></p>

</body>
</html>
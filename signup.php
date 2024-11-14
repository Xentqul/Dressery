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
        header("Location: index.php");
        exit();
    } else {
        echo "<p class='error'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>SIGN UP | DRESSERY</title>
</head>

<body>
    <div class="wrapperFormFlex">
        <img class="formImg" src="img/signup.jpg" alt="Signup Image">

        <div class="divRight">
            <p class="goToMain"><a href="index.php">←home</a></p>
            <p class="formLogo">DRESSERY</p>

            <p class="formName">Sign Up</p>

            <form method="POST" action="register.php">
                <p class="formHint">e-mail</p>
                <input type="email" name="email" id="email" required>

                <p class="formHint">password</p>
                <input type="password" name="password" id="password" required>

                <div class="wrapperButtonForm">
                    <button type="submit" class="formButton">
                        <p class="buttonFormName">sign up</p>
                    </button>
                </div>
            </form>
            <p class="lowerFormText">you have an account? <a href="login.php">log in</a></p>
        </div>
    </div>
</body>

</html>
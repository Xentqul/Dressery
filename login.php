<?php
// активна ли сессия - session_start()
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            header("Location: index.php");
            exit();
        } else {
            echo "<p class='error'>Invalid email or password</p>";
        }

        $stmt->close();
    } else {
        echo "<p class='error'>Please fill in both fields</p>";
    }
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
    <title>Log In | DRESSERY</title>
</head>

<body>

    <div class="wrapperFormFlex">
        <img class="formImg" src="img/login.jpg" alt="Login Image">

        <div class="divRight">

            <p class="goToMain"><a href="index.php">←home</a></p>
            <p class="formLogo">DRESSERY</p>

            <p class="formName">LOG IN</p>

            <form method="POST" action="login.php">
                <p class="formHint">e-mail</p>
                <input type="email" name="email" id="email" required>

                <p class="formHint">password</p>
                <input type="password" name="password" id="password" required>

                <div class="wrapperButtonForm">
                    <button type="submit" class="formButton">
                        <p class="buttonFormName">log in</p>
                    </button>
                </div>
            </form>
            <p class="lowerFormText">no account? <a href="signup.php">sign up</a></p>
        </div>
    </div>
</body>

</html>
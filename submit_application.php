<!-- submit_application.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Application Submission | DRESSERY</title>
</head>

<body>

    <?php
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $portfolio = $_POST['portfolio'];

        $stmt = $conn->prepare("INSERT INTO candidates (fullname, email, number, portfolio) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fullname, $email, $number, $portfolio);

        if ($stmt->execute()) {
            echo "<p class='success'>Application submitted successfully!</p>";
        } else {
            echo "<p class='error'>Error: " . $stmt->error . "</p>";
        }
    }
    ?>


<p class="goToMain AfterRegistration"><a href="index.php">←home</a></p>

</body>

</html>
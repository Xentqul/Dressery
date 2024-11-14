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
    <title>APPLICATON FORM | DRESSERY</title>
</head>

<body>
    <div class="wrapperFormFlex">
        <img class="formImg" src="img/applicationForm.jpg" alt="Application Form Image">
        <div class="divRight">
            <p class="goToMain"><a href="index.html">←home</a></p>
            <p class="formLogo">DRESSERY</p>

            <p class="justifyMiddle">APPLICATION FORM</p>

            <form method="POST" action="submit_application.php">
                <p class="formHint">full name</p>
                <input type="text" name="fullname" id="fullname" required>

                <p class="formHint">e-mail</p>
                <input type="email" name="email" id="email" required>

                <p class="formHint">number</p>
                <input type="number" name="number" id="number" required>

                <p class="formHint">link to the portfolio</p>
                <input type="text" name="portfolio" id="portfolio" required>

                <div class="wrapperButtonForm">
                    <button type="submit" class="formButton">
                        <p class="buttonFormName">send</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
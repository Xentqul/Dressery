<?php
session_start();
include 'db.php';

// Убедитесь, что пользователь вошел в систему
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Получить сохраненные статьи для текущего пользователя
$stmt = $conn->prepare("SELECT * FROM saved_articles WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Favorites | DRESSERY</title>
</head>

<body>

    <header id="moveToMain">
        <div class="wrapperForHeaderMargin">
            <ul class="header">
                <li class="headListLogo headList"><a class="emptyA" href="index.php">DRESSERY</a></li>
                <hr class="headHr">
                <li class="headList"><a class="emptyA" href="#moveToFashion">fashion</a></li>
                <li class="headList"><a class="emptyA" href="#moveToCulture">culture</a></li>
                <li class="headList"><a class="emptyA" href="#moveToBeauty">beauty</a></li>
                <li class="headList"><a class="emptyA" href="fav.php">favourite</a></li>
            </ul>
            <div class="wrapRightHead">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <button class="registr white"><a class="emptyA" href="logout.php">log out</a></button>
                <?php else: ?>
                    <button class="registr white"><a class="emptyA" href="login.php">log in</a></button>
                    <button class="registr black"><a class="whiteRegistr" href="signup.php">sign up</a></button>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <div class="blackLine">
        <p class="wideArticle">FAVOURITES</p>
    </div>

    <div class="wrapperForFavPhp">
        <h1>Saved Articles</h1>
        <div class="saved-articles">
        <?php
            if ($result->num_rows == 0) {
                echo "<p>No saved articles found.</p>";
            } else {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='saved-article'>";
                    echo "<h2>{$row['title']}</h2>";
                    echo "<p>Author: {$row['author']}</p>";
                    echo "<p>Published Date: {$row['published_date']}</p>";
                    echo "<form method='POST' action='toggle_favorite.php'>";
                    echo "<input type='hidden' name='article_id' value='{$row['article_id']}'>";
                    echo "<input type='hidden' name='title' value='{$row['title']}'>";
                    echo "<input type='hidden' name='author' value='{$row['author']}'>";
                    echo "<input type='hidden' name='published_date' value='{$row['published_date']}'>";
                    echo "<button class='remove-favorite' type='submit'>Remove</button>";
                    echo "</form>";
                    echo "</div>";

                    // Дополнительный отладочный вывод
                    echo "<pre>";
                    // echo "Row data: \n";
                    // print_r($row); // Вывод данных
                    echo "</pre>";
                }
            }
            ?>
        </div>
    </div>
    <p class="goToMain"><a href="index.php">←home</a></p>
    <footer>
        <div class="wrapperFooter">
            <div class="footerLeft">
                <p class="footerLogo">DRESSERY</p>
                <div class="socialBlock">
                    <img src="/img/twitter1.png" alt="/img/twitter1.png">
                    <img src="/img/facebook1.png" alt="/img/facebook1.png">
                    <img src="/img/insta1.png" alt="/img/insta1.png">
                    <img src="/img/youtube1.png" alt="/img/youtube1.png">
                    <img src="/img/tiktok0.png" alt="/img/tiktok0.png">
                </div>
                <p class="commission">We may earn commission from links on this page, but we only recommend products we back.</p>
                <p class="RightsReserved">©2024 Magazine Media, Inc. All Rights Reserved.</p>
            </div>
            <div class="footerRight">
                <ul class="linksFooter">
                    <li class="linkToFooter"><a class="whiteFooter" href="#moveToBeauty">Beauty</a></li>
                    <li class="linkToFooter"><a class="whiteFooter" href="#moveToFashion">Fashion</a></li>
                    <li class="linkToFooter"><a class="whiteFooter" href="#moveToCulture">Culture</a></li>
                </ul>
                <ul class="linksFooter">
                    <li class="linkToFooter"><a class="whiteFooter" href="login.php">Account</a></li>
                    <li class="linkToFooter"><a class="whiteFooter" href="#moveToMain">Home</a></li>
                    <li class="linkToFooter"><a class="whiteFooter" href="#">Vacancy</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
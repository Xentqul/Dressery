<?php
session_start();
include 'db.php'; // Подключение к базе данных
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <base href="http://DRESSERY/"> -->
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
    <title>DRESSERY</title>
</head>

<body>

    <header id="moveToMain">

        <div class="wrapperForHeaderMargin">
            <ul class="header">
                <li class="headListLogo headList"><a class="emptyA" href="#moveToMain">DRESSERY</a></li>
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
        <p class="blText">WELCOME HOME</p>
    </div>

    <section class="main">

        <div class="wrapeprInline">
            <p class="sectionArticle"><a href="#">fashion</a></p>
            <h2 class="mainH2"><a href="mainArticle.php">Dior Cruise 2025 Was a Tartan- and Tweed-Filled Tribute to
                    Scotland</a></h2>
            <p class="mainDescription">Dior Cruise 2025 Was a Tartan- and Tweed-Filled Tribute to Scotland</p>
            <p class="mainAuthor">by <a href="#">alexis wolfe</a></p>
            <a
                href="https://www.dior.com/ru_ru/fashion/%D0%BC%D0%BE%D0%B4%D0%B0-%D0%B4%D0%BB%D1%8F-%D0%B6%D0%B5%D0%BD%D1%89%D0%B8%D0%BD/%D0%BF%D0%BE%D0%BA%D0%B0%D0%B7%D1%8B-pret-a-porter/%D0%BF%D0%BE%D0%BA%D0%B0%D0%B7-%D0%BA%D1%80%D1%83%D0%B8%D0%B7%D0%BD%D0%BE%D0%B9-%D0%BA%D0%BE%D0%BB%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D0%B8%C2%A02025">
                <button class="toCollection">to collection</button></a>
        </div>

        <img class="imgMain" src="img/mainPicArticle.jpg" alt="/img/mainPicArticle.jpg">
    </section>

    <section class="thisSummerSection">

        <hr class="separateHr">

        <h1 class="h1Summer">THIS SUMMER</h1>

        <div class="flexSummer">
            <div class="summerDiv"><a class="emptyA" href="#">
                    <img class="summerPic" src="img/summer1.jpg" alt="/img/summer1.jpg">
                    <p class="summerTopic">Trendy shoes from the streets of New York</p>
                </a></div>

            <div class="summerDiv"><a class="emptyA" href="#">
                    <img class="summerPic" src="img/summer2.jpg" alt="/img/summer2.jpg">
                    <p class="summerTopic">Which bags are better to choose for a summer look?</p>
                </a></div>

            <div class="summerDiv"><a class="emptyA" href="#">
                    <img class="summerPic" src="img/summer3.png" alt="/img/summer3.jpg">
                    <p class="summerTopic">Flowers, flowers, flowers in your outfit </p>
                </a></div>

            <div class="summerDiv"><a class="emptyA" href="#">
                    <img class="summerPic" src="img/summer4.png" alt="/img/summer4.jpg">
                    <p class="summerTopic">Hats for the summer that will save you from the sun</p>
                </a></div>
        </div>
        <hr class="separateHr">
    </section>

    <section class="fashionSection" id="moveToFashion">

        <h2 class="FashionPart">FASHION</h2>

        <img class="fashionPicArticle" src="img/fashionArticle.png" alt="/img/fashionArticle.png">


        <div class="wrapTextFashionTopic">
            <p class="topicSectionFashion">DESIGNERS</p>

            <p class="articleFashionName"><a href="fashionArticle.php">Raising Luar</a></p>
            <p class="DescriptionLuar"><a class="noneUnderline" href="fashionArticle.php">Designer Raul Lopez is
                    building one of today’s most
                    important fashion labels with
                    a
                    subversive vision and a mother’s love</a></p>
            <p class="fashionByBrook">BY <a href="#">BROOK BOOB</a></p>
        </div>
    </section>

    <div class="offerDiv">
        <div class="wrapForWidth">
            <p class="offerLogo">DRESSERY</p>
            <p class="offerText">Do you have something to say? Become our <a class="underlineOffer"
                    href="applicationForm.php">fashion-journalist</a></p>
        </div>
    </div>

    <section class="culturePart" id="moveToCulture">
        <div class="wrapForLeftFloat">
            <h2 class="culturePartName">CULTURE</h2>

            <img class="imgCultureArticle" src="img/cultureArticle.jpg" alt="/img/cultureArticle.jpg">

            <p class="descriptionCulture"><a href="cultureArticle.php">How Eva Noblezada Learned to Set Boundaries?</a>
            </p>


            <div class="author-published">
                <p class="author">AS TOLD TO <a href="#">SAMUEL MAUDE</a></p>
                <p class="published">PUBLISHED: APR 24, 2024</p>
            </div>
        </div>

        <hr class="separateHr">
    </section>

    <section class="beautyPart" id="moveToBeauty">

        <h2 class="beautyPartName">BEAUTY</h2>

        <img class="imgBeautyArticle" src="img/beautyArticle.jpg" alt="/img/beautyArticle.jpg">

        <p class="nameOfArticleBeauty"><a class="aBeautyArticle" href="beautyArticle.php"> 6 Gorgeous Summer 2024 Hair
                Trends to Try Right This Second</a></p>

        <p class="descriptionBeauty">Inspired by Zendaya, Rihanna, Kendall, and all your other faves.</p>

        <div class="author-published">
            <p class="authorLindy">BY <a href="#">LINDY SEGAL</a></p>
            <p class="published">PUBLISHED: MAY 21, 2024</p>
        </div>
    </section>

    <footer>
        <div class="wrapperFooter">
            <div class="footerLeft">

                <p class="footerLogo">DRESSERY</p>

                <div class="socialBlock">
                    <img src="img/twitter1.png" alt="/img/twitter1.png">
                    <img src="img/facebook1.png" alt="/img/facebook1.png">
                    <img src="img/insta1.png" alt="/img/insta1.png">
                    <img src="img/youtube1.png" alt="/img/youtube1.png">
                    <img src="img/tiktok0.png" alt="/img/tiktok0.png">
                </div>

                <p class="commission">We may earn commission from links on this page, but we only recommend products we
                    back.
                </p>
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
<?php
session_start();
include 'db.php'; // Подключение к базе данных
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
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>DIOR | DRESSERY</title>
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
        <p class="wideArticle">DIOR CRUISE</p>
    </div>

    <div class="wrapperMiddle">

        <p class="goBeauty"><a href="#">fashion</a></p>

        <h1 class="h1nameArticle">Dior Cruise 2025 Was a Tartan- and Tweed-Filled Tribute to Scotland</h1>
        <p class="descrForArticle">Maria Grazia Chiuri paid homage to the country’s past and present.</p>
        <p class="authorMiniLindy">BY <a href="#">ALEXIS WOLFE</a></p>
        <p class="publishedMiniArticle">PUBLISHED: JUN 04, 2024</p>

        <form method="POST" action="toggle_favorite.php">
            <input type="hidden" name="article_id" value="1"> <!-- айди статьи и данные для вставки-->
            <input type="hidden" name="title" value="Dior Cruise 2025 Was a Tartan- and Tweed-Filled Tribute to Scotland">
            <input type="hidden" name="author" value="BY ALEXIS WOLFE">
            <input type="hidden" name="published_date" value="2024-06-04">
            <button class="favourite" type="submit">
                <img src="img/favourites.png" alt="/img/favourites.png" class="imgFav">
                <p class="textFav">SAVE ARTICLE</p>
            </button>
        </form>

        <img src="img/mainPicArticle.jpg" alt="/img/beautyArticle.jpg" class="imgZendaya">

        <p class="articleText firstLetter">The weather in Scotland is often filled with clouds and rain. However,
            today’s Dior
            cruise show was one of those unicorn days where the sun shone bright. When the guests, including Jennifer
            Lawrence and Lily Collins, arrived at Drummond Castle in Perthshire, the landscape and endless, immaculately
            manicured gardens served as the perfect backdrop to <span>Maria Grazia Chiuri’s</span> ode to the country
            and the deep
            ties that the house holds there.</p>

        <p class="articleText marginTopText">For the unfamiliar, in his fall 1947 collection, <span>Monsieur Dior</span>
            featured a
            look titled Écosse (Scottish). In 1955, he presented his work in Perthshire, in the ballroom of the
            Gleneagles Hotel, just a stone’s throw from this latest showing. In commemoration of the latter, photographs
            from that very presentation were transformed into prints and appliqués on tote bags as well as the edges of
            kilts.</p>

        <img class="imgBasic" src="img/jenniferLawrence.jpg" alt="/img/jenniferLawrence.jpg">

        <p class="articleText marginTopText"><span>Chiuri was inspired by Clare Hunter’s book Embroidering Her
                Truth</span>: Mary,
            Queen of Scots and the Language of Power for this collection, even commissioning the artist Pollyanna
            Johnson to create a portrait of the legendary figure. The unicorn and the thistle, both national symbols,
            found their way into her designs, as did a map of Scotland.</p>


        <p class="articleText marginTopText">But she also drew on more modern-day touchstones. The assortment was full
            of punk references, including tartans in vibrant purple, crimson red, and mustard yellow. Studs and grommets
            found on the core Dior bag styles like the Saddle, Lady Dior, and Bobby added a cool and unexpected element
            to the house’s key shapes. The waders and unzipped biker boots appeared sexy when paired with argyle
            thigh-high socks.</p>

        <p class="articleText marginTopText">The clean makeup and simple long single braids worn throughout the show
            gave a chic nod to the theme as well.</p>

        <img class="imgBasicWider" src="img/DRUMMONDCASTLE.jpg" alt="/img/DRUMMONDCASTLE.jpg">

        <p class="articleText marginTopText">The juxtaposition of hard and soft was the common thread weaving this
            extraordinary collection together in an effortless way. Craft is always a big focus of Chiuri’s, and her
            destination shows have incorporated local artisans—from Chanakya in Mumbai for her fall 2023 show to her
            linkup with Uniwax for cruise 2020 in Marrakech. The attention to detail and research here was spot-on, with
            Chiuri enlisting local heritage houses such as Harris Tweed, weaving mill Johnstons of Elgin, and ceremonial
            headwear maker Robert Makri to collaborate on the looks. She also tapped the young British designer
            <span>Samantha
                McCoach</span>, whose line Le Kilt has helped reinvent the Scottish staple for a new generation.
        </p>

        <p class="articleText marginTopText">However, it was the couture details applied to these stiffer and hardier
            fabrications that truly expressed Chiuri’s eye for the feminine. The lace and embroidery were intricate and
            delicate, laying gently on the body. Though the dresses may have taken the shape of medieval armor and
            restrictive corsetry, the finely applied mini-pearls and metallic threads to create sea fan coral and the
            cosmos made these tried-and-true fabrics and silhouettes softer and inherently more modern.</p>

        <p class="articleText marginTopText">Even though summer is finally here, this show will have you pining for fall
            to roll around.</p>

        <hr class="separateAllPage lowMarginTop">
        <p class="diorCruise">DIOR CRUISE 2025</p>
        <hr class="separateAllPage lowMarginBottom">
    </div>

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

                <p class="commision">We may earn commission from links on this page, but we only recommend products we
                    back.
                </p>
                <p class="RightsReserved">©2024Magazine Media, Inc. All Rights Reserved.</p>

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
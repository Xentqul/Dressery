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
    <title>CULTURY | DRESSERY</title>
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
        <p class="wideArticle">CULTURE</p>
    </div>

    <div class="wrapperMiddle wrapperForLuar">

        <p class="goBeauty alignCenter"><a class="luarTopic" href="#">culture</a></p>

        <h1 class="h1nameArticle alignCenter luarH1">How Eva Noblezada Learned to Set Boundaries</h1>
        <p class="descrForArticle alignCenter luarDescr">DThe star of Broadway’s The Great Gatsby discusses trusting in
            herself and how her life has changed since her career-making performance in Hadestown.</p>
        <div class="author-published">
            <p class="authorMiniLindy">AS TOLD BY <a href="#">SAMUEL MAUDE</a></p>
            <p class="publishedMiniArticle">PUBLISHED: APR 24, 2024</p>
        </div>

        <form method="POST" action="toggle_favorite.php">
            <input type="hidden" name="article_id" value="3"> <!-- айди статьи и данные для вставки-->
            <input type="hidden" name="title" value="How Eva Noblezada Learned to Set Boundaries">
            <input type="hidden" name="author" value="AS TOLD BY SAMUEL MAUDE">
            <input type="hidden" name="published_date" value="2024-02-04">
            <button class="favourite" type="submit">
                <img src="img/favourites.png" alt="/img/favourites.png" class="imgFav">
                <p class="textFav">SAVE ARTICLE</p>
            </button>
        </form>

        <img src="img/eva.jpg" alt="/img/eva.jpg" class="imgZendaya">

        <p class="articleText">
        <p class="articleText">This month, Eva Noblezada, who stars as Daisy Buchanan in The Great Gatsby, a new
            Broadway musical based upon the F. Scott Fitzgerald novel of the same name, discusses how the classic
            theater cliché trickles into her own life. Here, in her own words, she shares her warmup routine, her growth
            as a performer, and how actors must trust themselves.</p>
        </p>
        <hr class="lowMarginTop">

        <p class="articleText marginTopText">Eight shows a week is crazy. I think after COVID, “the show must go on”
            means something different to me. There’s a difference between perseverance and overwhelming your body
            because of lack of boundaries, and sometimes you have to have boundaries, even though it’s your job, even
            though you love it so much. If I wake up in the morning, and I’m like, “I’m sick,” any normal person would
            call out, but we, as theater artists, go, Oh, I can't because of the pressure from the producers. You don’t
            want to miss a show, you don’t want to put that pressure on your cover. Maybe you have friends watching that
            day, people come from thousands of miles around the world to see you perform live. There’s always a constant
            pressure to be on.</p>

        <p class="articleText marginTopText">As I get older, I’ve realized that I’m going to need a lot more time in the
            day to slowly warm up my voice. When I was younger, I used to show up to work and sing Beyoncé’s “Love On
            Top,” and that would be my warm-up. I’d just scream it out. Now, it’s different. It’s day-to-day. If I feel
            like, Ah, I need a long, stretched, vibrating exercise that brings my cords together, then that feels really
            nice. Sometimes I go, Ah, I've actually been pretty quiet for the last 18 hours. I talked a little bit. My
            voice sounds pretty fine. Let’s just take it easy. It really is about knowing your body, knowing your voice.
            That’s a very good first step to make a decision of what to do next. The more I know how I feel in the
            moment, the more I know what I need to do next to get ready for the show. Because it’s essentially like our
            whole day is dedicated to [thinking], okay, have you rested enough? Are you able to do the show in the way
            that you’d like to tonight?</p>

        <img class="imgBasicWider" src="/img/eva2.jpg" alt="/img/eva2.jpg">

        <p class="articleText marginTopText">So, in that way, I actually now feel like the show must go on in my own
            life rather than work, because if there’s one thing that Broadway performers are going to do is show up and
            fucking slay. I think that what we have to be able to do, and at the ease that it looks like we’re all doing
            it, it’s a very niche group of people who can do that.</p>

        <p class="articleText marginTopText">We should just trust ourselves. We’re so hard on ourselves. To achieve such
            a high standard of perfection and high standard of like, I haven’t missed a show in X amount of months, I
            can’t do that. Sometimes I really need to pick a day off and reset. Our schedules are so crazy. We can’t see
            other people when they’re in town or go for brunch or birthday dinners, just because we want to make sure
            we’re absolutely ready to do the show, our job. So, that to me, is “the show must go on.” Keep living your
            life and keep doing your best to maintain those healthy boundaries with yourself.
        </p>

        <img class="imgBasicWider" src="/img/eva3.jpg" alt="/img/eva3.jpg">

        <hr class="separateAllPage lowMarginTop">
        <p class="diorCruise">CULTURE - THEATRE</p>
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

                <p class="commision">We may earn commission from links on this page, but we only recommend products
                    we
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
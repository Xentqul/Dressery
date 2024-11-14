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
    <title>BEAUTY | DRESSERY</title>
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
        <p class="wideArticle">HAIR</p>
    </div>

    <div class="wrapperMiddle">

        <p class="goBeauty"><a href="#">beauty</a></p>

        <h1 class="h1nameArticle">6 Gorgeous Summer 2024 Hair Trends to Try Right This Second</h1>
        <p class="descrForArticle">Inspired by Zendaya, Rihanna, Kendall, and all your other faves.</p>
        <p class="authorMiniLindy">BY <a href="#">LINDY SEGAL</a></p>
        <p class="publishedMiniArticle">PUBLISHED: MAY 21, 2024</p>

        <form method="POST" action="toggle_favorite.php">
            <input type="hidden" name="article_id" value="4"> <!-- айди статьи и данные для вставки-->
            <input type="hidden" name="title" value="6 Gorgeous Summer 2024 Hair Trends to Try Right This Second">
            <input type="hidden" name="author" value="BY LINDY SEGAL">
            <input type="hidden" name="published_date" value="2024-05-21">
            <button class="favourite" type="submit">
                <img src="img/favourites.png" alt="/img/favourites.png" class="imgFav">
                <p class="textFav">SAVE ARTICLE</p>
            </button>
        </form>

        <img src="img/beautyArticle.jpg" alt="/img/beautyArticle.jpg" class="imgZendaya">

        <p class="articleText firstLetter">Summer is just about here — is your hair ready? If you're looking for a twist
            from
            your go-to ponytail or claw clip hairstyle, these six trends spotted on celebs are sure to inspire. From
            cute baby bangs to '90s-esque double buns, these hairstyles will carry you through the season and then some.
            Find your new favorite ahead, plus the products that will help you get the looks.</p>
    </div>

    <div class="lowerWrapper">

        <h2 class="nameUnit firstNameUnit">Extra-Long Length</h2>
        <div class="unite">
            <img src="img/kendallJenerBeauty.png" alt="/img/kendallJenerBeauty.png" class="unitPic">
            <p class="unitText">Expect one of the most popular trends of the Met Gala red carpet, seen here on Kendall
                Jenner, to continue on into the summer. “Mermaid waves have always been a client favorite, and it never
                goes
                out of style," says IGK Co-Founder Leo Izquierdo. "But I think the style is unique in a way where you
                can
                create a wave pattern that works for your own hair type."</p>
        </div>

        <hr class="separateAllPage">

        <h2 class="nameUnit">IGK Beach Club Texture Spray</h2>
        <div class="unit">
            <img src="img/buyHair1.png" alt="/img/buyHair1.png" class="unitPic">
            <div class="wrapperForFlexBuyHair">
                <p class="unitTextHair">Izquierdo says this texture spray helps get the "undone beach" aesthetic for
                    your
                    waves
                    without excessive heat.</p>
                <button class="buyButton"><a href="#" class="linkToBuy">€34 AT IGKHAIR.COM</a></button>
            </div>
        </div>
        <hr class="separateAllPage">

        <h2 class="nameUnit">Choppy Mini Bangs</h2>
        <div class="unite">
            <img src="img/gretaLeeBeauty.png" alt="/img/gretaLeeBeauty.png" class="unitPic">
            <p class="unitText">Celebs like Greta Lee got a jump on a fall runway trend with this rock-star-inspired
                look.
                “Fashion week showcased a mix of really dramatic styles, like baby bangs and slick fringe around the
                face,"
                says Izquierdo of the trend, spotted at the Louis Vuitton and Miu Miu fall/winter shows.</p>
        </div>

        <div class="unite">
            <img src="img/ashleyGrahamBeauty.png" alt="/img/ashleyGrahamBeauty.png" class="unitPic">
            <p class="unitText">Celeb hairstylist Justine Marjan created this look for Ashley Graham at the Met Gala,
                and
                stresses the importance of scalp care—especially when using faux hair. "I applied Nutrafol Hair Serum to
                Ashley's roots before styling her faux bangs to nourish the hair and scalp," says Marjan. "The serum is
                my
                go-to base, especially for a taut updo, as it's lightweight and helps to strengthen the hair while
                reducing
                visual breakage."</p>
        </div>

        <h2 class="nameUnit">Rounded Midi Bobs</h2>

        <p class="unitTextWide">"Lots of celebs like Hailey Bieber and Kourtney Kardashain are showcasing this cut
            in
            really beautiful ways," says Izquierdo. "I love the very effortless shoulder drop length, and I think
            this
            will have a resurgence as the weather gets warmer, and women will want a more carefree look.”</p>

        <div class="unit">
            <img src="img/margotRobbie.png" alt="/img/margotRobbie.png">
            <p class="unitTextMargot">Another celeb who recently underwent the chop? Margot Robbie, who marked her
                post-Barbie
                era
                with a shoulder-length cut.</p>
        </div>

        <hr class="separateAllPage">
        <h2 class="nameUnit">Dyson Supersonic Nural™ hair dryer</h2>
        <div class="unit">
            <img src="img/buyHair2.png" alt="/img/buyHair2.png" class="unitPic">
            <div class="wrapperForFlexBuyHair">
                <p class="unitTextHair">A bouncy bob is only as good as its blowout. Dyson's newest model has scalp
                    protect
                    mode
                    to help keep it from overheating as it gets closer to your head, and remembers your heat settings
                    with
                    each attachment.</p>
                <button class="buyButton"><a href="#" class="linkToBuy">€500 AT DYSON</a></button>
            </div>
        </div>

        <hr class="separateAllPage">

        <h2 class="nameUnit">Honey Blonde</h2>
        <div class="unite">
            <img src="img/rihanna.png" alt="/img/rihanna.png" class="unitPic">
            <p class="unitText">The golden, luminescent blonde Rihanna recently stepped out wearing feels so fresh for
                the warmer months.</p>
        </div>
        <div class="unite">
            <img src="img/zendaya.png" alt="/img/zendaya.png" class="unitPic">
            <p class="unitText">And to go along with her tenniscore fits, Zendaya also stepped out in a similarly sunny
                hair color while promoting Challengers styled by her longtime pro Ursula Stephen.</p>
        </div>

        <h2 class="nameUnit">Side Parts</h2>
        <div class="unite">
            <img src="img/rachelZegler.png" alt="/img/rachelZegler.png" class="unitPic">
            <p class="unitText">The Millennial-fave style was all over the runways, and it's celeb-approved too. Just
                look at Rachel Zegler at the Met Gala, wearing hers with a half-up hairstyle.</p>
        </div>
        <div class="unite">
            <img src="img/kirstenDunst-attends.png" alt="/img/kirstenDunst-attends.png" class="unitPic">
            <p class="unitText">Kirsten Dunst has also been loyal to her side part, recently wearing it with loose waves
                at the Cannes Film Festival.</p>
        </div>

        <hr class="separateAllPage">

        <h2 class="nameUnit">Briogeo Section + Style Pin Tail Comb</h2>
        <div class="unit">
            <img src="img/buyHair3.png" alt="/img/buyHair3.png" class="unitPic">
            <div class="wrapperForFlexBuyHair">
                <p class="unitTextHair greyUnitText">NOW 50% OFF</p>
                <button class="buyButton"><a href="#" class="linkToBuy">€6 AT BRIOGEO</a></button>
            </div>
        </div>

        <hr class="separateAllPage">

        <h2 class="nameUnit">Spiky Buns</h2>
        <p class="unitTextWide">For a summery style that keeps your hair off your neck, upgrade your cute little
            topknot with two stacked, spiky buns like Lucy Boynton's.</p>
        <div class="unite">
            <img src="img/emilyRatajkowski.png" alt="/img/emilyRatajkowski.png" class="unitPic">
            <p class="unitText">For a more dramatic take, try fanned-out ends like the style Emily Ratajkowski wore to
                the Met Gala.</p>
        </div>
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
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
    <title>DESIGNERS | DRESSERY</title>
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
        <p class="wideArticle">FASHION DESIGNERS</p>
    </div>

    <div class="wrapperMiddle wrapperForLuar">

        <p class="goBeauty alignCenter"><a class="luarTopic" href="#">fashion designers</a></p>

        <h1 class="h1nameArticle alignCenter luarH1">Raising Luar</h1>
        <p class="descrForArticle alignCenter luarDescr">Designer Raul Lopez is building one of today’s most important
            fashion
            labels with a
            subversive vision and a mother’s love</p>
        <div class="author-published">
            <p class="authorMiniLindy">BY <a href="#">BROOK BOBB</a></p>
            <p class="publishedMiniArticle">PUBLISHED: JUN 10, 2024</p>
        </div>

        <form method="POST" action="toggle_favorite.php">
            <input type="hidden" name="article_id" value="2"> <!-- айди статьи и данные для вставки-->
            <input type="hidden" name="title" value="Raising Luar">
            <input type="hidden" name="author" value="BY BROOK BOBB">
            <input type="hidden" name="published_date" value="2024-06-10">
            <button class="favourite" type="submit">
                <img src="img/favourites.png" alt="/img/favourites.png" class="imgFav">
                <p class="textFav">SAVE ARTICLE</p>
            </button>
        </form>

        <img src="img/fashionArticleVertical.png" alt="/img/fashionArticleVertical.png" class="imgZendaya">

        <p class="articleText"><span>Creating Motherhood</span> is a collection of stories focused on the intersection
            of
            family and creativity and how to live an artful life as a parent.</p>
        <hr class="lowMarginTop">

        <p class="articleText firstLetter">On a warm spring day in New York’s financial district, designer Raul Lopez
            sits at a work
            table inside his studio space at the WSA building, a buzzy new creative hub. He’s the man behind Luar, the
            independent fashion label he founded in 2011, which subverts and distorts classic American sportswear, and
            has amassed a cult community of fans. Lopez’s studio is dotted with visual markers of his brand: racks of
            deconstructed suiting and statement outerwear, a shelving system packed top to bottom with various
            iterations of his briefcase-esque It bag, rolls of fabric, and an inspiration board filled with an array of
            images. A makeshift sign featuring Mary J. Blige and the word “CHOPPED” hangs on one wall. On his desk is a
            sketch of a look for Lil Nas X, whom he dressed for this year’s Met Gala.</p>

        <p class="articleText luarTextMargin">
            Next to Lopez, seated at a separate large table, is his mom, Ana, a petite, beautiful woman with glowing
            skin, short hair, and a mothering stare—sweet and sincere, though it also makes you a little afraid of her
            at first. If I hadn’t known she was Lopez’s mom, I would have thought she was the CEO of Luar. She gives
            “head bitch in charge” energy in the most charming way possible.</p>

        <img class="imgBasicWider imgBasicLuar2" src="img/luar-family-665fbba8c71b0.png"
            alt="img/luar-family-665fbba8c71b0.png">

        <p class="articleText luarTextMargin">
            When I meet her, Mrs. Lopez is wearing a black oversize Luar sweatshirt and one of her son’s newest bags,
            the Brookie, named for his niece, which the designer tells me she bought herself. “She has a problem,” Lopez
            says of his mom’s shopping habits, laughing. “She’s just a compulsive shopper. They used to call her ‘the
            ant’—la hormiga—because she would be carrying 100 bags that weighed more than her.” She cracks a smile at
            the teasing and replies directly to her son in Spanish. “She says I should give thanks that I came out like
            her,” Lopez says.</p>

        <p class="articleText luarTextMargin">
            He certainly owes a lot to his mom, in terms of his love of clothes and his deep understanding of how people
            want to—and, in her opinion, should—dress. She has been a major influence on Lopez’s body of work and his
            evolution as a designer. She was also the first person in his life to see him for who he really is. To
            understand Luar, the brand, you must understand where Lopez came from.</p>

        <img class="imgBasicWider imgBasicLuar2" src="img/luar-finals-01-wm-666228f06daf9.png"
            alt="img/luar-finals-01-wm-666228f06daf9.png">

        <p class="articleText luarTextMargin">
            Born and raised in Williamsburg, Brooklyn, he has a brother and a sister (also named Ana), neither of whom
            works in fashion. His mother came to the United States at age 18 and gave up working at a hat factory to
            raise her three children. His father, described by Mrs. Lopez as a “forward thinker,” started out as a fruit
            merchant, then worked as a building super and eventually became the owner of the building the family grew up
            in, as well as other residential properties throughout the five boroughs. The family now resides in Long
            Island, but keeps the apartment in Williamsburg, while Lopez lives nearby in Greenpoint.</p>

        <p class="h1nameArticle alignCenter luarH1">“She says I should give thanks that I came out like her.” —Raul
            Lopez</p>

        <p class="articleText luarTextMargin">
            Lopez has spoken often and openly about how his upbringing has influenced his work, and how he loved growing
            up in the melting pot of a neighborhood that was home to his family, including his grandmother (another
            Ana), who is still there. “She’s been there for 60 years,” Lopez says. “She’s the only Latina woman who
            lives in the building, which is predominantly Hasidic Jewish, and they all call her ‘Grandma.’ ” Lopez’s
            signature, best-selling accessory, the Ana bag, is lovingly named after the Anas in his life (to recap: his
            grandmother, mom, and sister).</p>

        <img class="imgBasicWider imgBasicLuar" src="img/luar-f24.jpg" alt="/img/luar-f24.jpg">

        <p class="articleText luarTextMargin">
            As a little boy whose Catholic family didn’t allow him the space to come out as gay until his teenage years,
            Lopez expressed himself by getting dressed up for school every morning. “We called him ‘Little Tie,’ ” Mrs.
            Lopez says. “Every day, he had to be dressed in a blazer and tie.” Lopez would quietly study his mom’s
            style, which was classic and crisp and, back in her youth, very cool too. “I wasn’t allowed to go into
            women’s clothing stores,” Lopez says. “So I would just go through her pictures.” Mrs. Lopez says she’s loved
            fashion her whole life. “I was always that way,” she says. “In the Dominican Republic, I would wear bright
            colors and bell-bottoms. I had a friend who used to make and sell clothes, and I loved it all. She was the
            one who really helped me when I came to this country and went to work at the hat factory.”</p>

        <p class="h1nameArticle alignCenter luarH1">“I love everything Raul does. That’s the most important thing to
            me.”
            —Ana Lopez</p>

        <p class="articleText luarTextMargin">
            Though she was a clotheshorse, part of what drove Ana’s taste was also a traditional desire to always look
            good for her husband. She believes a woman should always keep her appearance fresh, by changing her hair or
            perfume, and should always be dressed up so that a man won’t “get bored.” Lopez rolls his eyes and laughs as
            his mother talks about how many times she’s changed her hair over the years. “She says the man is the head
            of the house,” he says, “but the woman is the neck.”</p>

        <img class="imgBasicWider imgBasicLuar" src="img/luar24.png" alt="/img/luar24.png">

        <p class="articleText luarTextMargin">
            The intersection of traditional and contemporary is at the core of Lopez’s design ethos and the identity
            politics he often explores in his collections. Most recently, for his Fall 2024 collection, titled
            “Deceptionista,” he took a deep dive into the concept of metrosexuality and the idea of masking or unmasking
            one’s own sexuality. The designs featured exaggerated shoulders, nipped waists, slick leathers, and sheer
            fabrics, all of which played up a provocative and powerful push-pull of the exposed and unexposed. The
            silhouettes also called to mind those images of his matriarchs—the photos of them wearing sharp skirts and
            suits as they went off to work in the city or got decked out for a celebrity family event.</p>

        <p class="h1nameArticle alignCenter luarH1">“She likes to smell my head. She’s such a Latino mom.” —Raul Lopez
        </p>

        <p class="articleText luarTextMargin">
            Lopez can look back on his childhood and reconcile opposing beliefs and unspoken tension around his
            sexuality. With tinges of humor and camp, he distills those tensions down through his designs and creates
            visual cues that speak honestly to the queer Latinx experience and to his own identity, which was formed by
            vastly diverse communities and belief systems: the Catholic church, his Dominican kin, his Hasidic
            neighbors, his queer chosen family. During the years of his life when he was closeted, Lopez admits, it was
            stifling, difficult, and complicated. Though his mom never confronted him about knowing he was gay, she was
            always there for him.</p>

        <img class="imgBasicWider imgBasicLuar2" src="img/henrikson-luar-finals-02-wm-6662291ac807b.png"
            alt="/img/henrikson-luar-finals-02-wm-6662291ac807b.png">

        <p class="articleText luarTextMargin">
            “She would buy me all my suits from the local Hasidic stores, and she was loving it back then,” he says.
            “She would be like, ‘Whatever you do in your room is none of my business.’ But she knew. She could see I was
            very frantic at a certain point at home, and she was scared. She tried to take me to different therapists to
            get me to come out, but I had to do it in my own time. It was a different era.” In the course of our
            conversation, Lopez uses the phrase “a different era” several times, glancing lovingly at his mother.</p>

        <img class="imgBasicWider imgBasicLuar" src="img/look-1-65036d5bdafc3.jpg" alt="/img/look-1-65036d5bdafc3.jpg">

        <p class="articleText luarTextMargin">
            He came out as bisexual as a teenager—which was, as he describes it, “the entry point back in the day.” His
            mom, he says, “laughed and said, ‘Oh sweetie, the only one who didn’t know was you,’ and she went to bed.”
            But for Lopez, coming out to her opened up a new world of possibilities for design. Though he wasn’t
            attending a fashion high school, nor would he attend design school later, Lopez could communicate with his
            mom on a different level, one where they could more openly discuss and share their love of clothes and
            style. When he and his friend Shayne Oliver launched their fashion label Hood by Air around 2006 between
            nights out at the club and the balls, Mrs. Lopez was their first supporter. “She loves Shayne,” Lopez says
            as his mother nods and smiles. “Shayne used to sleep in our house every night, and my mom would drive us
            around to all of the fabric stores.” Mrs. Lopez remembers this time fondly, and knew back then that her son
            had talent. His designs, she says, have always been “something different that not everyone else can make and
            not everyone can pull off.” She adds: “It inspires me.”</p>

        <p class="articleText luarTextMargin">
            After our sit-down, Lopez and his mom get up from the tables and make their way to a sitting area in front
            of the impressive candy-shop display of Ana bags, where they ready themselves for a series of portraits. As
            they stand side by side, I can see their resemblance more clearly, as well as the shared spirit, one
            illuminated by a strong yet subtle confidence. After the first few shots, they move to a different corner of
            the studio and get closer to one another. Lopez puts his arm around his mom, and she nuzzles against his
            chest. “This is very her, she loves this,” Lopez says. “She likes to smell my head. She’s such a Latino
            mom.” He talks about the first thing he made for her when he was younger, which he believes was a top made
            from some leftover fabric scraps he found lying around the house. Or, he says, “it might have actually been
            this dress I made for her to go to a wedding in, like, 2010 or something. It was still too experimental for
            her.”</p>

        <img class="imgBasicWider imgBasicLuar" src="img/luarlast.png" alt="/img/luarlast.png">

        <p class="articleText luarTextMargin">
            Lopez’s family hasn’t ever missed a Luar show. Typically, his mom, dad, sister, and niece Brooke attend,
            usually seated in the front row. In February 2023, when Lopez was given the coveted closing spot at New York
            Fashion Week and named an LVMH Prize finalist, he took his runway bow with tears in his eyes and his little
            niece by his side, holding his hand. But his Fall 2024 runway show highlighted how far Lopez has come and
            how much family matters in his world. Beyoncé, her mom Tina, and her sister Solange turned up to see the
            collection and to watch Solange’s son Julez—who is like a nephew to Lopez—model in the show. They were
            seated not far from the Lopez clan.</p>

        <p class="articleText luarTextMargin">
            When I ask Mrs. Lopez what she thought about Beyoncé being at her son’s show that night, she shrugs. “My son
            is the most important person there,” she says. “It was important that she was there, yes, but I love
            everything Raul does. That’s the most important thing to me.” Moms always know best.</p>


        <hr class="separateAllPage lowMarginTop">
        <p class="diorCruise">FASHION DESIGNER - LUAR</p>
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
                    <li class="linkToFooter"><a class="whiteFooter"
                            href="C:\xampp\htdocs\DRESSERY\login.php">Account</a></li>
                    <li class="linkToFooter"><a class="whiteFooter" href="#moveToMain">Home</a></li>
                    <li class="linkToFooter"><a class="whiteFooter" href="#">Vacancy</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
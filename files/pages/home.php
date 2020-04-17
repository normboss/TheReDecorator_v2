<?php
if (!session_id())
    session_start();
?>
<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Redecorator - home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/home.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <!-- <script src="https://kit.fontawesome.com/4503cd8997.js" crossorigin="anonymous"></script> -->

</head>

<body>
    <!-- <h1>hello world</h1> -->
    <header class="header">

        <?php require '../inc/menu.php';     ?>

        <!-- <nav class="menu1">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="slipcovers.php">SLIPCOVERS</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav> -->

        <div class="logo">
            <h1>The <span class="red-text">RE</span>decorator</h1>
            <p>Make the most of what you already have</p>
        </div>

    </header>

    <section class="home-way">
        <h1>Your Home, Your&nbsp;Way</h1>
        <p>
            Choosing fabrics, paint colors, accessories and decorative accents
            that compliment the architectural elements in your space is my specialty.
        </p>

    </section>

    <main class="container">
        <div class="centering-block">

            <!-- Column1 -->
            <div class="column column1">
                <img src="../img/fabric_samples.png" alt="">

                <div class="column1-block1">
                    <h3>The <span class="red-text">RE</span>decorator</h3>
                    <p>
                        Lucy Smith, the <span class="red-text">RE</span>decorator, has
                        over 35 years in the decorating field.
                    </p>
                </div>

                <div class="lucy-image">
                    <img src="../img/lucy_72.png" alt="" style="width: 50%; height: 50%;">
                </div>

                <div class="column1-block3 column1-block">
                    <div class="column1-block3-heading column1-block">
                        My Solution
                    </div>
                    <div class="column1-block3-small-heading column1-block">
                        <span class="red-text">RE</span>duce
                    </div>
                    <div class="column1-block3-copy column1-block">
                        Eliminate clutter
                    </div>
                    <div class="column1-block3-small-heading column1-block">
                        <span class="red-text">RE</span>Use
                    </div>
                    <div class="column1-block3-copy column1-block">
                        Give new life to what you already own.
                    </div>
                    <div class="column1-block3-small-heading column1-block">
                        <span class="red-text">RE</span>Arrange
                    </div>
                    <div class="column1-block3-copy column1-block">
                        Items you already own.
                    </div>
                    <div class="column1-block3-small-heading column1-block">
                        <span class="red-text">RE</span>Paint
                    </div>
                    <div class="column1-block3-copy column1-block">
                        Coordinate your project with color
                    </div>
                    <br>
                    <div class="column1-block3-copy-big column1-block">
                        With Lucy’s guidance your surroundings can become organized and beautified. No job is too small.
                    </div>
                    <br>
                    <div class="column1-block3-button column1-block">
                        <button class="button1" onclick="window.location.href = 'contact.php'">Contact Lucy</button>
                    </div>
                </div>

            </div>

            <!-- Column2 -->
            <div class="column column2">
                <img src="../img/blue_plaid_flounce72.png" alt="">
                <div class="column2-block1">
                    <h2>Custom Slipcovers!</h2>
                </div>
                <!-- <div class="column2-block2">
                    <img src="../img/lucy_72.png" alt="">
                </div> -->
                <div class="column2-block3 column2-block">
                    Refresh your rooms with long wearing, washable slipcovers.
                </div>
                <div class="column2-block4 column2-block">
                    <button class="button1" onclick="window.location.href = 'slipcovers.php'">Slipcovers</button>
                </div>
                <div class="column2-block5 column2-block">
                    Why spend another day In a space that you don’t&nbsp;Love?
                </div>
                <div class="column2-block6 column2-block">
                    <button class="button1" onclick="window.location.href = 'contact.php'">Contact Lucy</button>

                </div>
                <div class="column2-block7 column2-block">
                    You deserve organized and beautiful surroundings
                </div>
                <div class="column1-block2">
                    <div class="column1-block2-center-block">
                        <span class="size1">Organize</span>
                        <span class="size2">and</span>
                        <br>
                        <span class="size3">simplify </span>
                        <br>
                        <span class="size2">the furniture and <br>accessories<br> of your </span>
                        <span class="size4">home</span>
                        <span class="size2">for</span><br>
                        <span class="size5">your lifestyle</span>,<br>
                        <span class="size6">comfort</span>,<br>
                        <span class="size2">and pocketbook.</span>
                    </div>
                </div>
            </div>

            <!-- Column3 -->
            <div class="column column3">
                <img src="../img/kitchen.png" alt="">
                <!-- <div class="column3-block1 column3-block">
                </div> -->
                <div class="column3-block2 column3-block">
                    Testimonials
                </div>

                <div class="column3-block3 column3-block">
                    Lucy brings years of experience to every job and delivers excellent workmanship and a perfect fit. <br>
                    Suzette, Belfast, ME<br>

                    <br>
                    I recommend Lucy’s work highly. She completed a slipcover for me quickly and made an ugly chair look decent.
                    <br>
                    The price was right and exactly what she had quoted. I’m happy with the results and especially happy to know and work with Lucy. <br>
                    Joy Vaughan, South Bristol, ME<br>
                    <br>

                    Oh, Lucy! Your choice of fabrics is brilliant. The room is transformed by the these three slip covers!
                    Our favorite swivel rockers look so good everyone thinks they are new. Thank you again.
                    <br>
                    Jane, Damariscotta, ME

                    <br><br>
                    Lucy Smith replaced some very worn slipcovers for us and did a meticulous job;
                    the result looks like we acquired new furniture! <br>
                    I recommend her highly. <br>
                    Brinna, Bremen Long Island, ME <br>
                    <br>

                    <div id="more1">
                        <p>

                    Hi Lucy,<br>
                    Thank you so much--I LOVE MY CUSHION!!! your color choices are brilliant! and it looks beautiful
                    at night and in daylight--the chair feels amazingly stable too- next--suggestions for redoing the
                    rush bottom on the largest of the old dining room chairs?<br>
                    Thank you, Ann<br>
                    <br>

                            Dear Lucy, <br>
                            I want to express my gratitude for the very capable assistance you provided when
                            I decided to redecorate my home. I enjoyed hearing your creative suggestions and am so glad
                            I followed your advice for both my dining room and living room. The freshly painted walls compliment
                            the new furniture beautifully and I’m happy to have friends over to visit now. It was such a relief to
                            find someone with your abilities after my disappointing experience with a previous decorator. <br>
                            Best o luck with your new venture and keep up the great work.<br>
                            Very truly yours, Susan<br><br>

                        </p>
                    </div>

                    <div class="more-button">
                        <button id="myBtn1" class="button1" onclick="myFunction1()">Read More</button>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php require '../inc/footer.php' ?>



</body>

</html>
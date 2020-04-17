<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Redecorator - slipcovers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/slipcovers.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">

</head>

<body>

    <header class="header">

        <?php require '../inc/menu.php';     ?>

        <br><br>
    </header>

    <br><br>

    <main class="container">
        <div class="outer-block">
            <div class="block1">
                <h2>The <span class="red-text">RE</span>decorator Strategy:</h2>
            </div>

            <div class="block2">
                <h1>Slipcovers!</h1>
                <p>Make the most of what you already have</p>
            </div>

            <div class="block3">
                The <span class="red-text">RE</span>decorator Strategy: Update and refresh your favorite furniture!
                Lucy fabricates custom fit long wearing washable slipcovers.
            </div>
        </div>

        <!-- block 1 -->
        <div id="block1" class="upper-block">

            <!-- Column1 -->
            <div class="column">
                <div class="column-image">
                    <img src="../img/fabric_samples_sq.png" alt="">
                </div>
                <div class="column-copy-block">
                    <div class="column-heading">
                        Design
                    </div>
                    <div class="column-copy">
                        Lucy owned and operated a design and fabrication business
                        serving her own clients and the best designers in Mid-Coast Maine.
                    </div>
                </div>
            </div>

            <!-- Column2 -->
            <div class="column">
                <div class="column-image">
                    <img src="../img/lucy_pins.png" alt="">
                </div>
                <div class="column-copy-block">
                    <div class="column-heading">
                        Skill
                    </div>
                    <div class="column-copy">
                        Lucy has over 35 years experience in design and fabrication.
                    </div>
                </div>
            </div>

            <!-- Column3 -->
            <div id="column3" class="column column3">
                <div class="column-image">
                    <img src="../img/barrel_chair_72.png" alt="">
                </div>
                <div class="column-copy-block">
                    <div class="column-heading">
                        Convenience
                    </div>
                    <div class="column-copy">
                        Lucy pin fits furniture in your home or you can bring small pieces to her studio.
                    </div>
                </div>
            </div>

        </div>

        <!-- block 2 -->
        <div class="photo-block">

            <div id="image1" class="column-image">
                <img src="../img/piping.png" alt="">
            </div>
            <div id="image2" class="column-image">
                <img src="../img/back ties72.png" alt="">
            </div>
            <div id="image3" class="column-image">
                <img src="../img/button_back.png" alt="">
            </div>
            <div id="image4" class="column-image">
                <img src="../img/dining_red_cks72.png" alt="">
            </div>
            <div id="image5" class="column-image">
                <img src="../img/red chair72.png" alt="">
            </div>
            <div id="image6" class="column-image">
                <img src="../img/red_white_stripe72.png" alt="">
            </div>
            <div id="image7" class="column-image">
                <img src="../img/couch_flounce72.png" alt="">
            </div>
            <div id="image8" class="column-image">
                <img src="../img/tack_back72.png" alt="">
            </div>
            <div id="image9" class="column-image">
                <img src="../img/gold_chair72.png" alt="">
            </div>
            <div id="image10" class="column-image">
                <img src="../img/tie_chair72.png" alt="">
            </div>
            <div id="image11" class="column-image">
                <img src="../img/camel_back72.png" alt="">
            </div>
            <div id="image12" class="column-image">
                <img src="../img/lucys_couch72.png" alt="">
            </div>
            <div id="image13" class="column-image">
                <img src="../img/before72.png" alt="">
            </div>
            <div id="image14" class="column-image">
                <img src="../img/after72.png" alt="">
            </div>
            <div id="image15" class="column-image">
                <img src="../img/studio_bench72.png" alt="">
            </div>
        </div>

    </main>
    <br>

    <div class="trailer">
        <div class="heading">
            What’s your project?
        </div>
        <div class="copy">
            As small as a throw pillow to as large as a couch, Lucy will help
            you decide on the right fabric for the job and give you a
            professionally finished product to enhance your space and be
            proud of for years to come. Call her today to set up an appointment.
        </div>

        <div class="final-block">
            <div class="final-block-text">
                    <h2>The <span class="red-text">RE</span>decorator <span class="gray-text">Strategy:</span></h2>
                    <p>
                    <span class="red-text">RE</span>duce, <span class="red-text">RE</span>use and <span class="red-text">RE</span>arrange
                    </p>
            </div>
            <div class="final-block-button">
                <button class="button1" onclick="window.location.href = 'contact.php'">Contact Lucy</button>
            </div>

        </div>

    </div>

    <?php require '../inc/footer.php' ?>

</body>

</html>
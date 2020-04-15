<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Redecorator - slipcovers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/slipcovers1.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">

</head>

<body>

    <header class="header">
        <nav class="menu1">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="slipcovers.php">SLIPCOVERS</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
        <br><br>
        <div class="block1">
            <h2>The <span class="red-text">Re</span>decorator Strategy:</h2>
        </div>

        <div class="block2">
            <h1>Slipcovers!</h1>
            <p>Make the most of what you already have</p>
        </div>

        <div class="block3">
            The <span class="red-text">Re</span>decorator Strategy: Update and refresh your favorite furniture!
            Lucy fabricates custom fit long wearing washable slipcovers.
        </div>

    </header>

    <br><br>

    <main class="container">
        <div class="centering-block">


            <!-- Column1 ****************************************************** -->
            <div class="column column1">

                <div class="column1-block1">
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
                <div class="sliderWrapper">
                    <div id="slider-block1">
                        <img src="../img/piping.png" alt="">
                        <img src="../img/dining_red_cks72.png" alt="">
                        <img src="../img/couch_flounce72.png" alt="">
                        <img src="../img/tie_chair72.png" alt="">
                        <img src="../img/before72.png" alt="">
                    </div>
                    <div class="nav">
                        <div id="prevButton1" class="button buttonLeft">prev</div>
                        <div id="nextButton1" class="button buttonRight">next</div>
                    </div>
                </div>


            </div>

            <!-- Column2 *******************************************************-->
            <div class="column column2">
                <div class="column2-block1">
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

                <div class="sliderWrapper">
                    <div id="slider-block2">
                        <img src="../img/back ties72.png" alt="">
                        <img src="../img/red chair72.png" alt="">
                        <img src="../img/tack_back72.png" alt="">
                        <img src="../img/camel_back72.png" alt="">
                        <img src="../img/after72.png" alt="">
                    </div>
                </div>
                <div class="nav">
                    <div id="nextButton2" class="button buttonRight">next</div>
                </div>

            </div>

            <!-- Column3 **********************************************************-->
            <div id="column3" class="column column3">
                <div class="column3-block1 column3-block">
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

                <div class="sliderWrapper">
                    <div id="slider-block3">
                        <img src="../img/button_back.png" alt="">
                        <img src="../img/red_white_stripe72.png" alt="">
                        <img src="../img/gold_chair72.png" alt="">
                        <img src="../img/lucys_couch72.png" alt="">
                        <img src="../img/studio_bench72.png" alt="">
                    </div>
                </div>
                <div class="nav">
                    <div id="nextButton3" class="button buttonRight">next</div>
                </div>

            </div>

            <!-- Column4 **********************************************************-->
            <div id="column4" class="column column4">

                <div class="sliderWrapper">
                    <div id="slider-block4">
                        <img src="../img/low_pressure_appleton_ridge72px.jpg">
                        <img src="../img/side_light_herbert.jpg">
                        <img src="../img/vespers_herbert2.jpg">
                        <img src="../img/eagle_nubbins_72.jpg">
                        <img src="../img/ubiquity.jpg">
                        <img src="../img/dyer_river_marsh.png">
                        <img src="../img/jane_herbert_nubbins.jpg">
                        <img src="../img/on_lookout_rock_herbert.jpg">
                        <img src="../img/stillness.jpg">
                        <img src="../img/studio.jpg">
                    </div>
                </div>
                <div class="nav">
                    <div id="nextButton4" class="button buttonRight">next</div>
                </div>
            </div>

        </div>

    </main>
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
    </div>
    <?php require '../inc/footer.php' ?>


    <!-- load scripts after dom has been rendered -->
    <script src="../js/gsap/TweenLite.js"></script>
    <script src="../js/gsap/plugins/CSSPlugin.js"></script>
    <script src="../js/gsap/easing/EasePack.js"></script>

    <!-- <script src="js/jquery/jquery-1.10.1.min.js"></script> -->



    <script>
        $(document).ready(function() {

            // block 1
            var slideWidth1 = $(".sliderWrapper").width(),
                $slider1 = $("#slider-block1"),
                $nextButton1 = $("#nextButton1"),
                clickCount = 0;

            $nextButton1.click(function() {
                clickCount++;
                if (clickCount > 4) {
                    clickCount = 0;
                }
                console.log(clickCount);
                TweenLite.to($slider1, 0.5, {
                    x: -clickCount * slideWidth1
                });
            });

            var $prevButton1 = $("#prevButton1");

            $prevButton1.click(function() {
                clickCount--;
                if (clickCount > 4 || clickCount < 0) {
                    clickCount = 0;
                }
                console.log(clickCount);
                TweenLite.to($slider1, 0.5, {
                    x: -clickCount * slideWidth1
                });
            });

            // block 2
            var slideWidth2 = $(".column").width(),
                $slider2 = $("#slider-block2"),
                $nextButton2 = $("#nextButton2"),
                clickCount2 = 0;

            $nextButton2.click(function() {
                clickCount2++;
                if (clickCount2 > 4) {
                    clickCount2 = 0;
                }
                console.log(clickCount2);
                TweenLite.to($slider2, 0.5, {
                    x: -clickCount2 * slideWidth2
                });
            });

            // block 3
            var slideWidth3 = $(".column").width(),
                $slider3 = $("#slider-block3"),
                $nextButton3 = $("#nextButton3"),
                clickCount3 = 0;

            $nextButton3.click(function() {
                clickCount3++;
                if (clickCount3 > 4) {
                    clickCount3 = 0;
                }
                console.log(clickCount3);
                TweenLite.to($slider3, 0.5, {
                    x: -clickCount3 * slideWidth3
                });
            });

            // block 4
            var slideWidth4 = $(".column").width(),
                $slider4 = $("#slider-block4"),
                $nextButton4 = $("#nextButton4"),
                clickCount4 = 0;

            $nextButton4.click(function() {
                clickCount4++;
                if (clickCount4 > 9) {
                    clickCount4 = 0;
                }
                console.log(clickCount4);
                TweenLite.to($slider4, 0.5, {
                    x: -clickCount4 * slideWidth4
                });
            });

        });
    </script>

</body>

</html>
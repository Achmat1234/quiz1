<section>
    <?php


    $sitename = 'Quiz';
    $sitedescription = 'Free Quiz';
    $author = 'Achmat Armien';

    $note = 'This quiz is completely free.';
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title><?= $sitename; ?></title>
        <!--    meta-->
        <meta name="description" content="<?= $sitedescription; ?>">
        <meta name="author" content="Achmat Armien">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Achmat, Armien, Free, Quiz, Open-Source, PHP">
        <!--    styles-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Serif" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <!--===============================opening of body tag.===== header-->

    <body>
        <header>
            <h1><?= $sitename; ?></h1>
        </header>
        <!--======================================line and images==========-->
        <hr>
        <div>
            <img src="images/focus.gif" alt="focus" width="24%" height="24%">
            <img src="images/brave.gif" alt="brave" width="24%" height="24%">
            <img src="images/brave.gif" alt="brave" width="24%" height="24%">
            <img src="images/focus.gif" alt="focus" width="24%" height="24%">
        </div>
        <!--=================================beginning of php script============-->
        <?php
        error_reporting(0);

        //===================================CONFIGURATION
        $title = "Achmats Random Quiz";
        $address = "index.php";
        $address = "index.html";
        $randomizequestions = "yes";
        //===============================starting of with first question=======================
        $a = array(
            1 => array(
                0 => "What is the most well known fast food place in Cape Town?",
                1 => "McDonald's",
                2 => "Food-Inn",
                3 => "Kfc",
                4 => "Ocean basket",
                6 => 1
            ),
            //===================================question number 2=========================================
            2 => array(
                0 => "What car did Toyota release in 2019?",
                1 => "Focus",
                2 => "Mustang",
                3 => "Supra",
                4 => "Gtr",
                6 => 3
            ),

            //=========================================question number 3=====================================
            3 => array(
                0 => "What is used to surf with?",
                1 => "Skateboard",
                2 => "Surfboard",
                3 => "Jetski",
                4 => "Floaty",
                6 => 2
            ),

            //====================================question number 4===================================
            4 => array(
                0 => "What is the tallest building in Cape Town?",
                1 => "Absa Building",
                2 => "Metropolitan Building",
                3 => "Media 24 Building",
                4 => "Fnb Building",
                6 => 4
            ),

            //======================================question number 5==================================
            5 => array(
                0 => "Oshark Marine World is in ...?",
                1 => "Durban",
                2 => "Pretoria",
                3 => "Cape Town",
                4 => "Bloemfontein",
                6 => 1
            ),

            //========================================question number 6=========================
            6 => array(
                0 => "What is Signal Heal well known for?",
                1 => "View",
                2 => "Trees",
                3 => "Lions",
                4 => "Braai Spots",
                6 => 1
            ),

            //===================================question number 7================================
            7 => array(
                0 => "Every year Cape Town intertains kids with ... for them to get the feeling of Christmas?",
                1 => "Stars",
                2 => "Music",
                3 => "City Street lights",
                4 => "Festival lights",
                6 => 4
            ),

            #############==========question number 8====#######################//
            8 => array(
                0 => "In Cape Town youngsters loves nice ...?",
                1 => "Cars",
                2 => "Chairs",
                3 => "Houses",
                4 => "Blankets",
                6 => 1
            ),

            #############==========question number 9====#######################//
            9 => array(
                0 => "What does dogs eat?",
                1 => "McDonald's",
                2 => "Montigo",
                3 => "Kfc",
                4 => "Fish Fingers",
                6 => 2
            ),

            #############==========question number 10====#######################//
            10 => array(
                0 => "What is Christiaan Barnaard well known for?",
                1 => "First barber in Cape Town",
                2 => "Selling Chicken Livers",
                3 => "Making the best mince Curry",
                4 => "Heart Transplantions",
                6 => 4
            ),

            #############==========question number 11====#######################//
            11 => array(
                0 => "What team plays rugby for South Africa?",
                1 => "Lions",
                2 => "Western Province",
                3 => "New Zeeland",
                4 => "Spring Boks",
                6 => 4
            ),

            #############==========question number 12====#######################//
            12 => array(
                0 => "What is the most well known place for gatsbies in Athlone ?",
                1 => "Golden Dish",
                2 => "Fast & Furios Foods",
                3 => "Wembaly",
                4 => "Nando's",
                6 => 1
            ),

            #############==========question number 13====#######################//
            13 => array(
                0 => "Cats loves to catch ...?",
                1 => "Fish",
                2 => "Eagles",
                3 => "Birds",
                4 => "Mouse",
                6 => 4
            ),

            #############==========question number 14====#######################//
            14 => array(
                0 => "What does people love to do in summer?",
                1 => "Swim",
                2 => "Run",
                3 => "Sit",
                4 => "Scream",
                6 => 1
            ),

            #############==========question number 15====#######################//
            15 => array(
                0 => "The sun shines throughout the...?",
                1 => "Day",
                2 => "Night",
                3 => "Morning",
                4 => "Month",
                6 => 1
            ),

            #############==========question number 16====#######################//
            16 => array(
                0 => "What is the name of South Africa's president?",
                1 => "Cyril Ramaphosa",
                2 => "Luke",
                3 => "Chang-Lee",
                4 => "Mogabi",
                6 => 1
            ),

            #############==========question number 17====#######################//
            17 => array(
                0 => "In what province did South Africa experience a Tsunami before?",
                1 => "Cape Town",
                2 => "Port Elizibath",
                3 => "Durban",
                4 => "Johannes Burg",
                6 => 3
            ),

            #############==========question number 18====#######################//
            18 => array(
                0 => "What is the most well known website to pull information from on the internet?",
                1 => "Gumtree",
                2 => "ZoeWorld",
                3 => "Google",
                4 => "Instergram",
                6 => 3
            ),

            #############==========question number 19====#######################//
            19 => array(
                0 => "What is the app everyone uses from morning to evening?",
                1 => "WhatsApp",
                2 => "Facebook",
                3 => "Twitter",
                4 => "Wechat",
                6 => 1
            ),
        );


        #############==========questions php randomizequestions====#######################//
        $max = 20;

        $question = $_POST["question"];

        if ($_POST["Randon"] == 0) {
            if ($randomizequestions == "yes") {
                $randval = mt_rand(1, $max);
            } else {
                $randval = 1;
            }
            $randval2 = $randval;
        } else {
            $randval = $_POST["Randon"];
            $randval2 = $_POST["Randon"] + $question;
            if ($randval2 > $max) {
                $randval2 = $randval2 - $max;
            }
        }

        #############==========questions php post====#######################//
        $ok = $_POST["ok"];

        if ($question == 0) {
            $question = 0;
            $ok = 0;
            $percentage = 0;
        } else {
            $percentage = Round(100 * $ok / $question);
        }
        ?>

        <!--===============starting of html and javascript==================-->
        <html>

        <head>
            <title>Multiple Choice Questions: <?php print $title; ?></title>

            <script LANGUAGE='JavaScript'>
                function Goahead(number) {
                    if (document.percentage.response.value == 0) {
                        if (number == <?php print $a[$randval2][6]; ?>) {
                            document.percentage.response.value = 1
                            document.percentage.question.value++
                            document.percentage.ok.value++
                        } else {
                            document.percentage.response.value = 1
                            document.percentage.question.value++
                        }
                    }
                    if (number == <?php print $a[$randval2][6]; ?>) {
                        document.question.response.value = "You sure?"
                    } else {
                        document.question.response.value = "You sure?"
                    }
                }
            </script>
        </head>

        <!--==========================================ending of js==========================-->


        <!--==========================================-->

        <body BGCOLOR=FFFFFF>

            <h1><?php print "$title"; ?></h1>
            <table BORDER=5% CELLSPACING=5 WIDTH=100%>

                <?php if ($question < $max) { ?>

                <td>
                    <form METHOD=POST NAME="question" ACTION="">
                        <?php print "<b>" . $a[$randval2][0] . "</b>"; ?>

                        <br>     <INPUT TYPE=radio NAME="option" VALUE="1" onClick=" Goahead (1);"><?php print $a[$randval2][1]; ?>
                        <br>     <INPUT TYPE=radio NAME="option" VALUE="2" onClick=" Goahead (2);"><?php print $a[$randval2][2]; ?>
                        <?php if ($a[$randval2][3] != "") { ?>
                        <br>     <INPUT TYPE=radio NAME="option" VALUE="3" onClick=" Goahead (3);"><?php print $a[$randval2][3];
                                                                                                        } ?>
                        <?php if ($a[$randval2][4] != "") { ?>
                        <br>     <INPUT TYPE=radio NAME="option" VALUE="4" onClick=" Goahead (4);"><?php print $a[$randval2][4];
                                                                                                        } ?>
                        <?php if ($a[$randval2][5] != "") { ?>
                        <br>     <INPUT TYPE=radio NAME="option" VALUE="5" onClick=" Goahead (5);"><?php print $a[$randval2][5];
                                                                                                        } ?>


                        <br>     <input type=text name=response size=8>
                    </form>

                    <?php
                    } else if ($percentage <= 40) {
                        ?>
                    <tr>
                        <td ALIGN=Center>
                            You have been playing to much!!! Pull up your Shocks!!!
                            <br>
                            I thought much more of you then this!!! <?php print $percentage; ?> %<br>
                            <img src="images/lecture.gif" alt="lecture" width="36%" height="36%">
                            <p><A href="index.php">Restart</A>
                                <br>
                                <br>
                                <p><A HREF="<?php print $address; ?>"></a>
                                    <?php } else if ($percentage >= 41 && $percentage <= 70) {
                                        ?>
                    <tr>
                        <td ALIGN=Center>
                            Well Done!!! You have done so great!
                            <br>Keep up the hardwork! YOU HAVE A BEAUTIFUL SMILE!!! <?php print $percentage; ?> %<br>
                            <img src="images/fly.gif" alt="fly" width="36%" height="36%">
                            <p><A href="index.php">Restart</A>
                                <br>
                                <br>
                                <?php
                                } else {
                                    ?>
                    <tr>
                        <td ALIGN=left>
                            WOW!!! you have done great! You are a number 1 top Student!!!
                            <br>Percentage of correct responses: <?php print $percentage; ?> % <br>
                            <img src="images/clap.gif" alt="clap" width="36%" height="36%">
                            <p><A href="index.php">Restart</A>
                                <br>
                                <br>

                                <?php } ?>

                        </td>
                        <td ALIGN=center>
                            <form METHOD=POST NAME="percentage" ACTION="<?php print $URL; ?>">

                                <br>Percentage of correct responses: <?php print $percentage; ?> %
                                <br><input type=submit value="Next >>">
                                <input type=hidden name=response value=0>
                                <input type=hidden name=question value=<?php print $question; ?>>
                                <input type=hidden name=ok value=<?php print $ok; ?>>
                                <input type=hidden name=Randon value=<?php print $randval; ?>>
                                <br><?php print $question + 1; ?> / <?php print $max; ?>
                            </form>
                            <br>
                            <br>
                        </td>
                    </tr>
            </table>

        </body>

        </html>


    </body>

    </html>
</section>
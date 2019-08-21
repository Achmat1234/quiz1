<?php


$sitename = 'Quiz';
$sitedescription = 'Free Quiz';
$author = 'Achmat Armien';

$note = 'Welcome to Achmats quiz.';
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

<body>
    <header>
        <h1><?= $sitename; ?></h1>
    </header>

    <hr>


    <div id="container">
        <p><strong>Note: </strong><?= $note; ?></p>
        <form action="result.php" method="POST">
            <ol type="1">
                <div id="question-container">
                    <li>
                        <h2 class="question" id="1">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-1" value="A">McDonald's<br>
                    <input type="radio" name="answer-1" value="B">Food-Inn<br>
                    <input type="radio" name="answer-1" value="C">Kfc<br>
                    <input type="radio" name="answer-1" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="2">What car did Toyota release in 2019?</h2>
                    </li>
                    <input type="radio" name="answer-2" value="A">Focus<br>
                    <input type="radio" name="answer-2" value="B">Mustang<br>
                    <input type="radio" name="answer-2" value="C">Supra<br>
                    <input type="radio" name="answer-2" value="D">Gtr<br>
                </div>


                <div id="question-container">
                    <li>
                        <h2 class="question" id="3">What is used to surf with?</h2>
                    </li>
                    <input type="radio" name="answer-3" value="A">Skateboard<br>
                    <input type="radio" name="answer-3" value="B">Boat<br>
                    <input type="radio" name="answer-3" value="C">Jetski<br>
                    <input type="radio" name="answer-3" value="D">Floaty<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="4">What is the tallest building in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-4" value="A">Absa Building<br>
                    <input type="radio" name="answer-4" value="B">Metropolitan Building<br>
                    <input type="radio" name="answer-4" value="C">Media 24 Building<br>
                    <input type="radio" name="answer-4" value="D">Fnb Building<br>
                </div>


                <div id="question-container">
                    <li>
                        <h2 class="question" id="5">Oshark Marine World is in ...?</h2>
                    </li>
                    <input type="radio" name="answer-5" value="A">Durban<br>
                    <input type="radio" name="answer-5" value="B">Pretoria<br>
                    <input type="radio" name="answer-5" value="C">Cape Town<br>
                    <input type="radio" name="answer-5" value="D">Bloemfontein<br>
                </div>


                <div id="question-container">
                    <li>
                        <h2 class="question" id="6">What is Cignal Heal well known for?</h2>
                    </li>
                    <input type="radio" name="answer-6" value="A">View<br>
                    <input type="radio" name="answer-6" value="B">Trees<br>
                    <input type="radio" name="answer-6" value="C">Lions<br>
                    <input type="radio" name="answer-6" value="D">Braai Spots<br>
                </div>


                <div id="question-container">
                    <li>
                        <h2 class="question" id="7">Every year Cape Town intertains kids with ... for them to get the feeling of Christmas?</h2>
                    </li>
                    <input type="radio" name="answer-7" value="A">Music<br>
                    <input type="radio" name="answer-7" value="B">Stars<br>
                    <input type="radio" name="answer-7" value="C">City Street lights<br>
                    <input type="radio" name="answer-7" value="D">Festival lights<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="8">In Cape Town youngsters loves nice ...?</h2>
                    </li>
                    <input type="radio" name="answer-8" value="A">Cars<br>
                    <input type="radio" name="answer-8" value="B">Chairs<br>
                    <input type="radio" name="answer-8" value="C">Houses<br>
                    <input type="radio" name="answer-8" value="D">Blankets<br>
                </div>


                <div id="question-container">
                    <li>
                        <h2 class="question" id="9">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-9" value="A">McDonald's<br>
                    <input type="radio" name="answer-9" value="B">Food-Inn<br>
                    <input type="radio" name="answer-9" value="C">Kfc<br>
                    <input type="radio" name="answer-9" value="D">Ocean basket<br>
                </div>


                <div id="question-container">
                    <li>
                        <h2 class="question" id="10">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-10" value="A">McDonald's<br>
                    <input type="radio" name="answer-10" value="B">Food-Inn<br>
                    <input type="radio" name="answer-10" value="C">Kfc<br>
                    <input type="radio" name="answer-10" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="11">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-11" value="A">McDonald's<br>
                    <input type="radio" name="answer-11" value="B">Food-Inn<br>
                    <input type="radio" name="answer-11" value="C">Kfc<br>
                    <input type="radio" name="answer-11" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="12">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-12" value="A">McDonald's<br>
                    <input type="radio" name="answer-12" value="B">Food-Inn<br>
                    <input type="radio" name="answer-12" value="C">Kfc<br>
                    <input type="radio" name="answer-12" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="13">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-13" value="A">McDonald's<br>
                    <input type="radio" name="answer-13" value="B">Food-Inn<br>
                    <input type="radio" name="answer-13" value="C">Kfc<br>
                    <input type="radio" name="answer-13" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="14">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-14" value="A">McDonald's<br>
                    <input type="radio" name="answer-14" value="B">Food-Inn<br>
                    <input type="radio" name="answer-14" value="C">Kfc<br>
                    <input type="radio" name="answer-14" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="15">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-15" value="A">McDonald's<br>
                    <input type="radio" name="answer-15" value="B">Food-Inn<br>
                    <input type="radio" name="answer-15" value="C">Kfc<br>
                    <input type="radio" name="answer-15" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="16">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-16" value="A">McDonald's<br>
                    <input type="radio" name="answer-16" value="B">Food-Inn<br>
                    <input type="radio" name="answer-16" value="C">Kfc<br>
                    <input type="radio" name="answer-16" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="17">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-17" value="A">McDonald's<br>
                    <input type="radio" name="answer-17" value="B">Food-Inn<br>
                    <input type="radio" name="answer-17" value="C">Kfc<br>
                    <input type="radio" name="answer-17" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="18">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-18" value="A">McDonald's<br>
                    <input type="radio" name="answer-18" value="B">Food-Inn<br>
                    <input type="radio" name="answer-18" value="C">Kfc<br>
                    <input type="radio" name="answer-18" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="19">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-19" value="A">McDonald's<br>
                    <input type="radio" name="answer-19" value="B">Food-Inn<br>
                    <input type="radio" name="answer-19" value="C">Kfc<br>
                    <input type="radio" name="answer-19" value="D">Ocean basket<br>
                </div>

                <div id="question-container">
                    <li>
                        <h2 class="question" id="20">What is the most well known fast food place in Cape Town?</h2>
                    </li>
                    <input type="radio" name="answer-20" value="A">McDonald's<br>
                    <input type="radio" name="answer-20" value="B">Food-Inn<br>
                    <input type="radio" name="answer-20" value="C">Kfc<br>
                    <input type="radio" name="answer-20" value="D">Ocean basket<br>
                </div>





                <input name="btn" value="Submit" type="submit">
            </ol>
        </form>

    </div>

</body>

</html>
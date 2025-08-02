<?php

$pageTitle = 'Tomato Chutney | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
I made this delicious Tomato Chutney especially as an accompaniment to my sausage roll & caramalised onion, but, believe me, it will go with anything made for a relish...
TEXT;
$ogDescription = <<<'TEXT'
I made this delicious Tomato Chutney especially as an accompaniment to my sausage roll & caramalised onion
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/tomato-chutney/650x366/tomato-chutney-in-jars-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/tomato-chutney.html';
$recipeName = 'Tomato Chutney';
$recipeIntro = <<<'TEXT'
I made this delicious Tomato Chutney especially as an accompaniment to my sausage roll & caramalised onion, but, believe me, it will go with anything made for a relish...
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/blank.png");
        /* set the background size */
        --bg-size: 32px;
        /* set the start of the 2nd colour of the gradient */
        /* basically, increase the value until the background
           images are below the intro' paragraphs */
        --bg-1st-col-stop: 35%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/tomato-chutney.view.php';

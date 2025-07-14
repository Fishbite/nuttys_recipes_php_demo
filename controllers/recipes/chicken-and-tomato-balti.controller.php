<?php

$pageTitle = 'Chicken & Tomato Balti Curry | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
If you like tomatoes, you'll love this Chicken & Tomato Balti Curry It is a wonderful curry but, be mindful to make it when tomatoes are in season and really flavourful
TEXT;
$ogDescription = <<<'TEXT'
If you like tomatoes, you'll love this Chicken & Tomato Balti Curry
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chicken-and-tomato-balti/650x366/chicken-and-tomato-balti-plated-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chicken-and-tomato-balti.html';
$recipeName = 'Chicken & Tomato Balti Curry';
$recipeIntro = <<<'TEXT'
If you like tomatoes, you'll love this Chicken & Tomato Balti Curry It is a wonderful curry but, be mindful to make it when tomatoes are in season and really flavourful
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
        --bg-1st-col-stop: 55%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/chicken-and-tomato-balti.view.php';

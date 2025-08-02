<?php

$pageTitle = 'Gravy | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
A quick and easy gravy recipe that you can rustle up without the need of those instant gravy granuals that are so full of things you don't need!
TEXT;
$ogDescription = <<<'TEXT'
A quick and easy gravy that you can rustle up without the need of those instant gravy granuals
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/gravy/650x366/cauliflower-curry-in-a-pan-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/cauliflower-curry.html';
$recipeName = 'Gravy';
$recipeIntro = <<<'TEXT'
A quick and easy gravy recipe that you can rustle up without the need of those instant gravy granuals that are so full of things you don't need!
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

require __DIR__ . '/../../views/recipes/gravy.view.php';

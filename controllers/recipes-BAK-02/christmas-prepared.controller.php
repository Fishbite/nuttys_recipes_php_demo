<?php

$pageTitle = 'Christmas Prepared! | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Christmas Prepared! A collection of pre-made savoury, oven-ready snacks & sides for when the time is right. Christmas is a week away and I'm super organised :-) 
TEXT;
$ogDescription = <<<'TEXT'
Christmas Prepared! A collection of pre-made savoury, oven-ready snacks & sides 
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/christmas-prepared/650x366/bacon-and-cheese-puffs-raw.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/christmas-prepared.html';
$recipeName = 'Christmas Prepared';
$recipeIntro = <<<'TEXT'
Christmas Prepared! A collection of pre-made savoury, oven-ready snacks & sides for when the time is right. Christmas is a week away and I'm super organised :-) 
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
        --bg-1st-col-stop: 30%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/christmas-prepared.view.php';

<?php

$pageTitle = 'Jerked Chicken Escalope Grill | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
This Jerked Chicken Escalope Grill recipe could not be simpler. If you have ever made our Jerk curries, this will be a breeze for you, if not, why not give this a try
TEXT;
$ogDescription = <<<'TEXT'
A super simple Jerked Chicken Escalope Grill recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/jerked-chicken-escalope-grill/650x366/jerk-chicken-escalope-plated-03.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/jerked-chicken-escalope-grill.html';
$recipeName = 'Jerked Chicken Escalope Grill';
$recipeIntro = <<<'TEXT'
This Jerked Chicken Escalope Grill recipe could not be simpler. If you have ever made our Jerk curries, this will be a breeze for you, if not, why not give this a try
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
        --bg-1st-col-stop: 25%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/jerked-chicken-escalope-grill.view.php';

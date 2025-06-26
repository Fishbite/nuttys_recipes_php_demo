<?php

$pageTitle = 'Rogan Josh Pork Curry | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
My Rogan Josh Pork Curry recipe includes the method to make the curry paste too, but, do not be daunted! It really is quite simple to make your own curry paste.
TEXT;
$ogDescription = <<<'TEXT'
Rogan Josh Pork Curry: I am using pork, but you could easily substitute for lamb.
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/rogan-josh-pork-curry/650x366/rogan-josh-pork-curry-in-dish-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/rogan-josh-pork-curry.html';
$recipeName = 'Rogan Josh Pork Curry';
$recipeIntro = <<<'TEXT'
My Rogan Josh Pork Curry recipe includes the method to make the curry paste too, but, do not be daunted! It really is quite simple to make your own curry paste.
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

require __DIR__ . '/../../views/recipes/rogan-josh-pork-curry.view.php';

<?php

$pageTitle = 'Pomegranate Chicken Curry | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
this is Anardana Murgh from Himachal Pradesh. Chicken is cooked in an aromatic masala of spices - dried pomegranate seeds adds a unique tart and tangy flavour
TEXT;
$ogDescription = <<<'TEXT'
Pomegranate Chicken Curry - Anardana Murgh from Himachal Pradesh
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/pomegranate-chicken-curry/650x366/fresh-pomegranate-seeds-in-curry.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/pomegranate-chicken-curry.html';
$recipeName = 'Pomegranate Chicken Curry';
$recipeIntro = <<<'TEXT'
this is Anardana Murgh from Himachal Pradesh. Chicken is cooked in an aromatic masala of spices - dried pomegranate seeds adds a unique tart and tangy flavour
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

require __DIR__ . '/../../views/recipes/pomegranate-chicken-curry.view.php';

<?php

$pageTitle = 'Mushroom Fried Rice | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
This is a super easy recipe to whip up — Mushroom Fried Rice — but the real magic is in the chopping, so take your time with it! Pair that with my Sweet & Sour Pork
TEXT;
$ogDescription = <<<'TEXT'
This is a super easy recipe to whip up — Mushroom Fried Rice
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/mushroom-fried-rice/650x366/sweet-and-sour-pork.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/mushroom-fried-rice.html';
$recipeName = 'Mushroom Fried Rice';
$recipeIntro = <<<'TEXT'
This is a super easy recipe to whip up — Mushroom Fried Rice — but the real magic is in the chopping, so take your time with it! Pair that with my Sweet & Sour Pork
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

require __DIR__ . '/../../views/recipes/mushroom-fried-rice.view.php';

<?php

$pageTitle = 'Quiche Lorraine | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Now, as you know, we love a pie here @ Nutty's! Savoury or sweet, it's a lovely thing, so I thought I would share the Ultimate Quiche Lorraine recipe. I made a huge one!
TEXT;
$ogDescription = <<<'TEXT'
I thought I would share the Ultimate Quiche Lorraine recipe with you
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/quiche-lorraine/650x366/quiche-lorraine-cooked.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/quiche-lorraine.html';
$recipeName = 'Quiche Lorraine';
$recipeIntro = <<<'TEXT'
Now, as you know, we love a pie here @ Nutty's! Savoury or sweet, it's a lovely thing, so I thought I would share the Ultimate Quiche Lorraine recipe. I made a huge one!
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

require __DIR__ . '/../../views/recipes/quiche-lorraine.view.php';

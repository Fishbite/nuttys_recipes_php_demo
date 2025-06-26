<?php

$pageTitle = 'Blue Cheese Macaroni Pie | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Blue Cheese Macaroni Pie This is serious adult stuff! The little ones just might find this a little too strong for them. I made this to go with my Jerked Chicken Curry
TEXT;
$ogDescription = <<<'TEXT'
Blue Cheese Macaroni Pie recipe, seriously adult stuff!
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/blue-cheese-macaroni-pie/650x366/blue-cheese-macaroni-pie-baked.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/blue-cheese-macaroni-pie.html';
$recipeName = 'Blue Cheese Macaroni Pie';
$recipeIntro = <<<'TEXT'
Blue Cheese Macaroni Pie This is serious adult stuff! The little ones just might find this a little too strong for them. I made this to go with my Jerked Chicken Curry
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/macaroni.svg");
        /* set the background size */
        --bg-size: 96px;
        /* set the start of the 2nd colour of the gradient */
        --bg-1st-col-stop: 35%;
        /* Note: it's important to set the colour stop to a position
           that allows you to distinguish the ingredients/method tabs
           from the background. The longer the heading paragraphs are
           the greater the percentage colour stop needs to be. */
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/blue-cheese-macaroni-pie.view.php';

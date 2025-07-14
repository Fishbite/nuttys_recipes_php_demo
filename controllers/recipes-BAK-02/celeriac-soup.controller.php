<?php

$pageTitle = 'Celeriac Soup | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Celeriac is often overlooked and underused, but it’s absolutely delicious. It can be grated into pickles and salads or used in soups — perfect for warming up in winter
TEXT;
$ogDescription = <<<'TEXT'
Celeriac is often overlooked and underused, but it’s absolutely delicious as soup!
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/celeriac-soup/2080x2296/celeriac-soup-served.jpg';
$canonical = 'https://www.nuttyskitchen.co.uk/celeriac-soup.html';
$recipeName = 'Celeriac Soup';
$recipeIntro = <<<'TEXT'
Celeriac is often overlooked and underused, but it’s absolutely delicious. It can be grated into pickles and salads or used in soups — perfect for warming up in winter
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

require __DIR__ . '/../../views/recipes/celeriac-soup.view.php';

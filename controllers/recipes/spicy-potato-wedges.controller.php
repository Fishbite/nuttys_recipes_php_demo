<?php

$pageTitle = 'Spicy Potato Wedges | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Here's a side with a bit of a kick: Spicy Potato Wedges when you fancy something a little different from fries or chips. They are so simple to make, why buy them ready made?
TEXT;
$ogDescription = <<<'TEXT'
Here's a side with a bit of a kick: Spicy Potato Wedges
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/spicy-potato-wedges/650x366/spicy-potato-wedges.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/spicy-potato-wedges.html';
$recipeName = 'Spicy Potato Wedges';
$recipeIntro = <<<'TEXT'
Here's a side with a bit of a kick: Spicy Potato Wedges when you fancy something a little different from fries or chips. They are so simple to make, why buy them ready made?
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
        --bg-1st-col-stop: 40%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/spicy-potato-wedges.view.php';

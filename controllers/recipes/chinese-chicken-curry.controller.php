<?php

$pageTitle = 'Chinese Chicken Curry | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Chinese chicken curry, just like the takeaway does it
TEXT;
$ogDescription = <<<'TEXT'
Chinese chicken curry, just like the takeaway does it
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chinese-chicken-curry/650x366/chinese-chicken-curry-and-rice-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chinese-chicken-curry.html';
$recipeName = 'Chinese Chicken Curry';
$recipeIntro = <<<'TEXT'
Chinese chicken curry, just like the takeaway does it
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
        --bg-1st-col-stop: 65%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/chinese-chicken-curry.view.php';

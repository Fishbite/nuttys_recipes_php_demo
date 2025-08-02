<?php

$pageTitle = 'A Recipe | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
TEXT;
$ogDescription = <<<'TEXT'
Short description here please!
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/special-fried-rice/650x366/special-fried-rice-and-beansprouts.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/special-fried-rice.html';
$recipeName = 'Special Fried Rice';
$recipeIntro = <<<'TEXT'
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

require __DIR__ . '/../../views/recipes/special-fried-rice.view.php';

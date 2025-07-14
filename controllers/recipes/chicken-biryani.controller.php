<?php

$pageTitle = 'Chicken Biryani | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
I get that Biryani has a reputation for being complicated. But honestly? It's just rice, chicken, and a little spice magic. All myths removed. Chicken Biryani is simple
TEXT;
$ogDescription = <<<'TEXT'
I get that Biryani has a reputation for being complicated. But honestly? It's simple
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chicken-biryani/650x366/chicken-biryani-raita-popadoms.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chicken-biryani.html';
$recipeName = 'chicken biryani';
$recipeIntro = <<<'TEXT'
I get that Biryani has a reputation for being complicated. But honestly? It's just rice, chicken, and a little spice magic. All myths removed. Chicken Biryani is simple
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

require __DIR__ . '/../../views/recipes/chicken-biryani.view.php';

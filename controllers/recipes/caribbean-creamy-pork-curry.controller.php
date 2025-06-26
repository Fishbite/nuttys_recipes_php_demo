<?php

$pageTitle = 'Caribbean Creamy Pork curry | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Caribbean Creamy Pork Curry Now this is completely different to most of my Caribbean dishes, not a fresh chilli in sight for starters. Greek yogurt & coconut cream...
TEXT;
$ogDescription = <<<'TEXT'
Caribbean Creamy Pork Curry... is completely different to most of my Caribbean dishes
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/caribbean-creamy-pork-curry/650x366/caribbean-creamy-pork-curry-and-rice.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/caribbean-creamy-pork-curry.html';
$recipeName = 'Caribbean Creamy Pork Curry';
$recipeIntro = <<<'TEXT'
Caribbean Creamy Pork Curry Now this is completely different to most of my Caribbean dishes, not a fresh chilli in sight for starters. Greek yogurt & coconut cream...
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

require __DIR__ . '/../../views/recipes/caribbean-creamy-pork-curry.view.php';

<?php

$pageTitle = 'Jamaican Pumpkin Soup | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Nutty's Jamaican Pumpkin Soup is no ordinary bowl of comfort — it's a cauldron of culinary chaos, smooth velvety perfection & a fiery little Scotch Bonnet lurking in the pot
TEXT;
$ogDescription = <<<'TEXT'
Nutty's Jamaican Pumpkin Soup with a fiery little Scotch Bonnet lurking in the pot
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/jamaican-pumpkin-soup/650x366/jamaican-pumpkin-soup-in-dish.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/jamaican-pumpkin-soup.html';
$recipeName = 'Jamaican Pumpkin Soup';
$recipeIntro = <<<'TEXT'
Nutty's Jamaican Pumpkin Soup is no ordinary bowl of comfort — it's a cauldron of culinary chaos, smooth velvety perfection & a fiery little Scotch Bonnet lurking in the pot
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

require __DIR__ . '/../../views/recipes/jamaican-pumpkin-soup.view.php';

<?php

$pageTitle = 'Fruit Cake | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
There are so many variations of this cake, but don't worry, this one is probably the best fruit cake in the world! It's easy to make and completely and utterly delicious
TEXT;
$ogDescription = <<<'TEXT'
Probably the best, most deliciously soft & moist fruit cake in the world!
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/fruit-cake/650x366/fruit-cake-sliced-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/fruit-cake.html';
$recipeName = 'Fruit Cake';
$recipeIntro = <<<'TEXT'
There are so many variations of this cake, but don't worry, this one is probably the best fruit cake in the world! It's easy to make and completely and utterly delicious
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
        --bg-1st-col-stop: 45%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/fruit-cake.view.php';

<?php

$pageTitle = 'Spicy Baked Beans and Peppers | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Spicy Baked Beans & Peppers! This is something my mother used to put together for barbecues & parties. I've altered it slightly as were not keen on barbecue style sauces!
TEXT;
$ogDescription = <<<'TEXT'
Spicy Baked Beans and Peppers Recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/spicy-baked-beans-and-peppers/650x366/spicy-baked-beans-and-peppers.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/spicy-baked-beans-and-peppers.html';
$recipeName = 'Spicy Baked Beans and Peppers';
$recipeIntro = <<<'TEXT'
Spicy Baked Beans & Peppers! This is something my mother used to put together for barbecues & parties. I've altered it slightly as were not keen on barbecue style sauces!
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

require __DIR__ . '/../../views/recipes/spicy-baked-beans-and-peppers.view.php';

<?php

$pageTitle = 'Luxury Chicken Pie with Mushrooms & Leeks| Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Pie lovers, rejoice! It's National Pie Week and here at Nutty's Kitchen we are paying proper tribute to Britain's most glorious gift to the world  the humble yet heroic pie! 
TEXT;
$ogDescription = <<<'TEXT'
Celebrate National Pie Week with Luxury Chicken Pie with Mushrooms & Leeks
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/luxury-chicken-pie/650x366/pie-with-trimmed-golden-pastry-04.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/luxury-chicken-pie.html';
$recipeName = 'Luxury Chicken Pie';
$recipeIntro = <<<'TEXT'
Pie lovers, rejoice! It's National Pie Week and here at Nutty's Kitchen we are paying proper tribute to Britain's most glorious gift to the world  the humble yet heroic pie! 
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

require __DIR__ . '/../../views/recipes/luxury-chicken-pie.view.php';

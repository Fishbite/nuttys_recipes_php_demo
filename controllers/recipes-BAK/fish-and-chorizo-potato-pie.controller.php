<?php

$pageTitle = 'Fish & Chorizo Potato Pie | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Fish and chorizo with a crusty, toast creamy mash, who'd have thought it? Absolute genius!
TEXT;
$ogDescription = <<<'TEXT'
Fish and chorizo with a crusty, toast creamy mash. Absolute genius
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/fish-and-chorizo-potato-pie/650x366/fish-and-chorizo-potato-pie-cooked-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/fish-and-chorizo-potato-pie.html';
$recipeName = 'Fish & Chorizo Potato Pie';
$recipeIntro = <<<'TEXT'
Fish and chorizo with a crusty, toast creamy mash, who'd have thought it? Absolute genius!
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

require __DIR__ . '/../../views/recipes/fish-and-chorizo-potato-pie.view.php';

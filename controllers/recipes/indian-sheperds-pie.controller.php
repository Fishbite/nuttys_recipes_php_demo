<?php

$pageTitle = 'Indian Sheperd\'s Pie | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Indian Sheperd's Pie - The addition of fresh chillies and some store cupboard spices will transform your comfort food into an Indian dinner. This is so easy to make!
TEXT;
$ogDescription = <<<'TEXT'
Indian Sheperd's Pie - transform your comfort food into an Indian dinner
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/indian-sheperds-pie/650x366/indian-sheperds-pie-and-raita.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/indian-sheperds-pie.html';
$recipeName = 'Indian Sheperd\'s pie';
$recipeIntro = <<<'TEXT'
Indian Sheperd's Pie - The addition of fresh chillies and some store cupboard spices will transform your comfort food into an Indian dinner. This is so easy to make!
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

require __DIR__ . '/../../views/recipes/indian-sheperds-pie.view.php';

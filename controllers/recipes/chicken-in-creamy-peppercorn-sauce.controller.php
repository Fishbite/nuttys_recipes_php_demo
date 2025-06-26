<?php

$pageTitle = 'Chicken In Creamy Peppercorn Sauce | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Today, I'm going to use diced chicken thighs to create Chicken In Creamy Peppercorn Sauce. The delicate chicken is flavoured with smoked bacon, garlic of course pepper!
TEXT;
$ogDescription = <<<'TEXT'
Chicken In Creamy Peppercorn Sauce Recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chicken-in-creamy-peppercorn-sauce/650x366/chicken-in-creamy-peppercorn-sauce-and-mash-plated.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chicken-in-creamy-peppercorn-sauce.html';
$recipeName = 'Chicken In Creamy Peppercorn Sauce';
$recipeIntro = <<<'TEXT'
Today, I'm going to use diced chicken thighs to create Chicken In Creamy Peppercorn Sauce. The delicate chicken is flavoured with smoked bacon, garlic of course pepper!
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

require __DIR__ . '/../../views/recipes/chicken-in-creamy-peppercorn-sauce.view.php';

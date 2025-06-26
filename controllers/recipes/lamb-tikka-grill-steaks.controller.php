<?php

$pageTitle = 'Lamb Tikka Grill Steaks | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
This Lamb Tikka Grill Steaks recipe is a mirror of my Chicken Tikka Grilled Escalopes, but, it definitely requires a longer time in the marinade as it's harder to tenderise.
TEXT;
$ogDescription = <<<'TEXT'
Quick & easy to cook Lamb Tikka Grill Steaks recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/lamb-tikka-grill-steaks/650x366/lamb-tikka-grill-steak-plated-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/lamb-tikka-grill-steaks.html';
$recipeName = 'Lamb Tikka Grill Steaks';
$recipeIntro = <<<'TEXT'
This Lamb Tikka Grill Steaks recipe is a mirror of my Chicken Tikka Grilled Escalopes, but, it definitely requires a longer time in the marinade as it's harder to tenderise.
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

require __DIR__ . '/../../views/recipes/lamb-tikka-grill-steaks.view.php';

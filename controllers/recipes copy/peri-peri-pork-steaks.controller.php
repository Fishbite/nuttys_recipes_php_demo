<?php

$pageTitle = 'Peri Peri Pork Steaks | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Peri Peri Pork Steaks are so easy to make. This recipe is always a winner as it's bouncing with flavour and very few ingredients are required - cooks in 4 minutes
TEXT;
$ogDescription = <<<'TEXT'
Peri Peri Pork Steaks bouncing with the flavour of summer
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/peri-peri-pork-steaks/650x366/peri-peri-pork-steak-dinner.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/peri-peri-pork-steaks.html';
$recipeName = 'Peri Peri Pork Steaks';
$recipeIntro = <<<'TEXT'
Peri Peri Pork Steaks are so easy to make. This recipe is always a winner as it's bouncing with flavour and very few ingredients are required - cooks in 4 minutes
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

require __DIR__ . '/../../views/recipes/peri-peri-pork-steaks.view.php';

<?php

$pageTitle = 'khara Masala Balti Chicken | Nutty\'s Kitchen Recipe';
$metaDescription = <<<'TEXT'
Khara Masala Balti Chicken is a really quick and easy recipe which is a dry curry, a lightly spiced stir-fry dish with as much, or as little chilli kick as you please
TEXT;
$ogDescription = <<<'TEXT'
Khara Masal Balti Chicken is a deliciously succulent, lightly spiced dish that cooks super quick
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/khara-masala-balti-chicken/650x366/khara-masala-balti-chicken-plated-03.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/khara-masala-balti-chicken.html';
$recipeName = 'khara Masala-Balti Chicken';
$recipeIntro = <<<'TEXT'
Khara Masala Balti Chicken is a really quick and easy recipe which is a dry curry, a lightly spiced stir-fry dish with as much, or as little chilli kick as you please
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
        --bg-1st-col-stop: 40%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/khara-masala-balti-chicken.view.php';

<?php

$pageTitle = 'Chicken Tikka Grilled Escalope | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
I'm so excited to bring you my Chicken Tikka Grilled Escalopes recipe. We all know this dish as a truly delicious starter, I'm switching it up to create a complete dinner
TEXT;
$ogDescription = <<<'TEXT'
Chicken Tikka Grilled Escalope recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chicken-tikka-grilled-escalope/650x366/chicken-tikka-dinner-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chicken-tikka-grilled-escalope.html';
$recipeName = 'Chicken Tikka Grilled Escalope';
$recipeIntro = <<<'TEXT'
I'm so excited to bring you my Chicken Tikka Grilled Escalopes recipe. We all know this dish as a truly delicious starter, I'm switching it up to create a complete dinner
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
        --bg-1st-col-stop: 25%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/chicken-tikka-grilled-escalope.view.php';

<?php

$pageTitle = 'blackberry & soured cream flan | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
It 's the time of year when free Blackberries are easy to come by and there has been a bumper harvest here at Nutty's so, what better than Blackberry & Soured Cream Flan
TEXT;
$ogDescription = <<<'TEXT'
Short description here please!
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/blackberry-and-soured-cream-flan/650x366/cauliflower-curry-in-a-pan-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/blackberry-and-soured-cream-flan.html';
$recipeName = 'Blackberry And Soured Cream Flan';
$recipeIntro = <<<'TEXT'
It 's the time of year when free Blackberries are easy to come by and there has been a bumper harvest here at Nutty's so, what better than Blackberry & Soured Cream Flan
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

require __DIR__ . '/../../views/recipes/blackberry-and-soured-cream-flan.view.php';

<?php

$pageTitle = 'Sausage Roll & Caramalised Onion | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Christmas is nearly upon us so what better than making your own Sausage Roll & Caramalised Onion log. Yes I do mean a LOG, one big humongous sausage roll!
TEXT;
$ogDescription = <<<'TEXT'
When is a sausage roll, not a sausage roll? When its Nutty's huge Sausage Roll & Caramalised Onion log! This cook's nuts!...say's the editor! 
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/sausage-roll-and-caramalised-onion/650x366/sausage-roll-sliced.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/sausage-roll-and-caramalised-onion.html';
$recipeName = 'Sausage Roll & Caramalised Onion';
$recipeIntro = <<<'TEXT'
Christmas is nearly upon us so what better than making your own Sausage Roll & Caramalised Onion log. Yes I do mean a LOG, one big humongous sausage roll!
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

require __DIR__ . '/../../views/recipes/sausage-roll-and-caramalised-onion.view.php';

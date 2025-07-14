<?php

$pageTitle = 'Chicken in Cashew Nut Sauce | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Chicken in Cashew Nut Sauce Now this really is a Nutty dish! The flavour of this dish is quite unique and the sultanas pop like little jewels of amazing fruitiness
TEXT;
$ogDescription = <<<'TEXT'
chicken-in-cashew-nut-sauce
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chicken-in-cashew-nut-sauce/650x366/chicken-in-cashew-nut-sauce-plated.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chicken-in-cashew-nut-sauce.html';
$recipeName = 'Chicken In Cashew Nut Sauce';
$recipeIntro = <<<'TEXT'
Chicken in Cashew Nut Sauce Now this really is a Nutty dish! The flavour of this dish is quite unique and the sultanas pop like little jewels of amazing fruitiness
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

require __DIR__ . '/../../views/recipes/chicken-in-cashew-nut-sauce.view.php';

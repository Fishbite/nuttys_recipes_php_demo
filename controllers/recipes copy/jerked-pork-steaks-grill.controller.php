<?php

$pageTitle = 'jerked pork steaks grill | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
My grilled Jerked Pork Steaks could not be simpler, if you've made our Jerk curries this will be a breeze, if not, why not give this a try then move onto the curries
TEXT;
$ogDescription = <<<'TEXT'
a quick & delicious jerked pork steak recipe
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/jerked-pork-steaks/650x366/jerked-pork-steak-plated-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/jerked-pork-steaks-grill.html';
$recipeName = 'jerked pork steaks grill';
$recipeIntro = <<<'TEXT'
My grilled Jerked Pork Steaks could not be simpler, if you've made our Jerk curries this will be a breeze, if not, why not give this a try then move onto the curries
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

require __DIR__ . '/../../views/recipes/jerked-pork-steaks-grill.view.php';

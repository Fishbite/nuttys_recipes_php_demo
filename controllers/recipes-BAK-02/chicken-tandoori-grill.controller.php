<?php

$pageTitle = 'Chicken Tandoori Grill | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
 Chicken Tandoori Grill It's so easy to do. Juicy tender chicken thighs that literally melt in your mouth! marinade & refrigerate overnight. 4 to 7 minutes cooking time
TEXT;
$ogDescription = <<<'TEXT'
Chicken Tandoori Grill for the perfect charred Tandoor flavour without owning a clay Tandor oven
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/chicken-tandoori-grill/650x366/chicken-tandoori-grill-plated-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/chicken-tandoori-grill.html';
$recipeName = 'Chicken Tandoori Grill';
$recipeIntro = <<<'TEXT'
 Chicken Tandoori Grill It's so easy to do. Juicy tender chicken thighs that literally melt in your mouth! marinade & refrigerate overnight. 4 to 7 minutes cooking time
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
        --bg-1st-col-stop: 45%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/chicken-tandoori-grill.view.php';

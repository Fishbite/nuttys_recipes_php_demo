<?php

$pageTitle = 'Masala Veg with Fresh Fenugreek | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
If you're looking for a simple and quick side dish to complement grilled meat, this Masala Vegetable with Fresh Fenugreek is the perfect choice. It's also a fantastic...
TEXT;
$ogDescription = <<<'TEXT'
a simple and quick side dish to complement grilled meat
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/masala-veg-with-fresh-fenugreek/650x366/masala-veg-with-fresh-fenugreek.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/masala-veg-with-fresh-fenugreek.html';
$recipeName = 'Masala Veg with Fresh Fenugreek';
$recipeIntro = <<<'TEXT'
If you're looking for a simple and quick side dish to complement grilled meat, this Masala Vegetable with Fresh Fenugreek is the perfect choice. It's also a fantastic...
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

require __DIR__ . '/../../views/recipes/masala-veg-with-fresh-fenugreek.view.php';

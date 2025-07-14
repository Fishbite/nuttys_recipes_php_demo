<?php

$pageTitle = 'Steak and Ale Pie | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Steak and Ale pie. This classic dish features a rich, hearty stew topped with a golden puff pastry lid. While traditional recipes often include a pastry base this version...
TEXT;
$ogDescription = <<<'TEXT'
Steak and Ale pie. This is a rich deep stew with a puff pastry lid
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/steak-and-ale-pie/650x366/steak-and-ale-pie-with-veg-on-a-plate-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/steak-and-ale-pie.html';
$recipeName = 'Steak And Ale Pie';
$recipeIntro = <<<'TEXT'
Steak and Ale pie. This classic dish features a rich, hearty stew topped with a golden puff pastry lid. While traditional recipes often include a pastry base this version...
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

require __DIR__ . '/../../views/recipes/steak-and-ale-pie.view.php';

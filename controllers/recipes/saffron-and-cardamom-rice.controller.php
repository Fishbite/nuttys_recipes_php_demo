<?php

$pageTitle = 'Saffron and Cardamom Rice | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
I don't make this Saffron and Cardamom Rice recipe too often. However, I bought 1g of it a little while back and I wanted something a little special for a fish dish
TEXT;
$ogDescription = <<<'TEXT'
I don't make this Saffron and Cardamom Rice recipe too often, Its delicate flavours are just delightful
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/saffron-and-cardamom-rice/650x366/saffron-and-cardamom-rice.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/cauliflower-curry.html';
$recipeName = 'Saffron And Cardamom Rice';
$recipeIntro = <<<'TEXT'
I don't make this Saffron and Cardamom Rice recipe too often. However, I bought 1g of it a little while back and I wanted something a little special for a fish dish
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

require __DIR__ . '/../../views/recipes/saffron-and-cardamom-rice.view.php';

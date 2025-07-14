<?php

$pageTitle = 'Authentic Seekh Kebabs | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
I have been working on perfecting this recipe for Authentic Seekh Kebabs a good while now. Finally I think this recipe is perfect but I'll let you be the judge of that!
TEXT;
$ogDescription = <<<'TEXT'
Authentic Seekh Kebabs
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/authentic-seekh-kebabs/650x366/seekh-kebab-with-salad-raita-and-pita-bread-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/authentic-seekh-kebabs.html';
$recipeName = 'Authentic Seekh Kebabs';
$recipeIntro = <<<'TEXT'
I have been working on perfecting this recipe for Authentic Seekh Kebabs a good while now. Finally I think this recipe is perfect but I'll let you be the judge of that!
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

require __DIR__ . '/../../views/recipes/authentic-seekh-kebabs.view.php';

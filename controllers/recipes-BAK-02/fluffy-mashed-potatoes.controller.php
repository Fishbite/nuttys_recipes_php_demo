<?php

$pageTitle = 'Fluffy Mashed Potatoes | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Now who does not love a well made, well seasoned Fluffy mashed potatoes? These can add so much pleasure to any dinner, whether you top your dish off and bake it or...
TEXT;
$ogDescription = <<<'TEXT'
Now who does not love a well made, well seasoned Fluffy mashed potatoes
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/fluffy-mashed-potatoes/650x366/fluffy-mash-in-a-bowl-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/fluffy-mashed-potatoes.html';
$recipeName = 'Fluffy Mashed Potatoes';
$recipeIntro = <<<'TEXT'
Now who does not love a well made, well seasoned Fluffy mashed potatoes? These can add so much pleasure to any dinner, whether you top your dish off and bake it or...
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

require __DIR__ . '/../../views/recipes/fluffy-mashed-potatoes.view.php';

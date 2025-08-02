<?php

$pageTitle = 'Mediterranean style vegetables with pork steaks | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Mediterranean Style Vegetables with Pork Steaks recipe. This dish is a wonderful mix of carrots courgettes aubergine & sliced fresh garlic, and of course olive oil!
TEXT;
$ogDescription = <<<'TEXT'
delicious Mediterranean style vegetables with pork steaks
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/mediterranean-style-vegetables-with-pork-steaks/650x366/mediterranean-style-veg-with-pork-steaks-plated-03.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/mediterranean-style-vegetables-with-pork-steaks.html';
$recipeName = 'Mediterranean style vegetables with pork steaks';
$recipeIntro = <<<'TEXT'
Mediterranean Style Vegetables with Pork Steaks recipe. This dish is a wonderful mix of carrots courgettes aubergine & sliced fresh garlic, and of course olive oil!
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

require __DIR__ . '/../../views/recipes/mediterranean-style-vegetables-with-pork-steaks.view.php';

<?php

$pageTitle = 'Pear, Coconut & Blackberry Cake | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Now this Pear, Coconut & Blackberry Cake works perfectly as a pudding or a cake, the coconut adds flavour and texture to the sponge and also keeps it really moist
TEXT;
$ogDescription = <<<'TEXT'
Now this Pear, Coconut & Blackberry Cake works perfectly as a pudding or a cake
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/pear-coconut-blackberry-cake/650x366/pear-coconut-blackberry-cake-sliced-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/pear-coconut-blackberry-cake.html';
$recipeName = 'Pear, Coconut & Blackberry Cake';
$recipeIntro = <<<'TEXT'
Now this Pear, Coconut & Blackberry Cake works perfectly as a pudding or a cake, the coconut adds flavour and texture to the sponge and also keeps it really moist
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/b-berry-pear.svg");
        /* set the background size */
        --bg-size: 96px;
        /* set the start of the 2nd colour of the gradient */
        --bg-1st-col-stop: 25%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/pear-coconut-blackberry-cake.view.php';

<?php

$pageTitle = 'Jerked Chicken Curry | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Jerked Chicken Curry! Now this is different, totally different and no vegetables! I hear you screaming but Nutty! Well, I think you are in for a real treat here.
TEXT;
$ogDescription = <<<'TEXT'
Jerked chicken curry with blue cheese macaroni pie, food to calm the soul
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/jerked-chicken-curry/650x366/jerked-chicken-and-macaroni-pie-plated-03.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/jerked-chicken-curry.html';
$recipeName = 'Jerked Chicken Curry';
$recipeIntro = <<<'TEXT'
Jerked Chicken Curry! Now this is different, totally different and no vegetables! I hear you screaming but Nutty! Well, I think you are in for a real treat here.
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/chilli-thyme.svg");
        /* set the background size */
        --bg-size: 128px;
        /* set the start of the 2nd colour of the gradient */
        --bg-1st-col-stop: 35%;
        /* Note: it's important to set the colour stop to a position
           that allows you to distinguish the ingredients/method tabs
           from the background. The longer the heading paragraphs are
           the greater the percentage colour stop needs to be. */
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/jerked-chicken-curry.view.php';

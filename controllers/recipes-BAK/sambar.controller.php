<?php

$pageTitle = 'Sambar - South Indian Lentils & Vegetables | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Sambar — South Indian Lentils and Vegetables This is a truly delicious vegetable heavy dish. Kind of a soup but oh so much more, tamarind brings a tart sweet note...
TEXT;
$ogDescription = <<<'TEXT'
Sambar — South Indian Lentils & Vegetables This is a truly delicious vegetable heavy dish
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/sambar/1208x680/sambar-with-naan-on-the-side.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/sambar.html';
$recipeName = 'Sambar';
$recipeIntro = <<<'TEXT'
Sambar — South Indian Lentils and Vegetables This is a truly delicious vegetable heavy dish. Kind of a soup but oh so much more, tamarind brings a tart sweet note...
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

require __DIR__ . '/../../views/recipes/sambar.view.php';

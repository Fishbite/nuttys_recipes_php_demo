<?php

$pageTitle = 'Aloo Gobi | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
So here's a my version of Aloo Gobi — a very basic cauliflower & potato curry or side dish. I like to eat mine with a fork outta the pan as I'm testing it
TEXT;
$ogDescription = <<<'TEXT'
So here's my version of Aloo Gobi — a basic cauliflower & potato curry or side dish
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/aloo-gobi/650x366/aloo-gobi-curry-and-rice-02.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/aloo-gobi.html';
$recipeName = 'Aloo Gobi';
$recipeIntro = <<<'TEXT'
So here's a my version of Aloo Gobi — a very basic cauliflower & potato curry or side dish. I like to eat mine with a fork outta the pan as I'm testing it
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/veg.png");
        /* set the background size */
        --bg-size: 32px;
        /* set the start of the 2nd colour of the gradient */
        --bg-1st-col-stop: 25%;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/aloo-gobi.view.php';

<?php

$pageTitle = 'Macaroni Pie | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
I serve my baked macaroni pie with Jerk Chicken, but it's perfect straight from the dish for a lunch with a side of salad or toast and is just great with baked beans!
TEXT;
$ogDescription = <<<'TEXT'
Baked macaroni pie recipe, best served with Jamaican Jerked Chicken, or, Jerked Chicken/Pork Curry
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/macaroni-pie/650x366/macaroni-pie-baked.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/macaroni-pie.html';
$recipeName = 'Macaroni Pie';
$recipeIntro = <<<'TEXT'
I serve my baked macaroni pie with Jerk Chicken, but it's perfect straight from the dish for a lunch with a side of salad or toast and is just great with baked beans!
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        --bg-img: url("/images/icons/blank.png");
        /* set the background size */
        --bg-size: 32px;
        /* set the start of the 2nd colour of the gradient */
        --bg-1st-col-stop: 25%;
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

require __DIR__ . '/../../views/recipes/macaroni-pie.view.php';

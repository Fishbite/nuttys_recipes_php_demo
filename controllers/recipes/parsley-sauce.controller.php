<?php

$pageTitle = 'Parsley Sauce | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
This absolutely delicious home-made Parsley Sauce for white fish bacon, or gammon is just divine. It's so quick and easy to make  the best Parsley Sauce you've ever tasted
TEXT;
$ogDescription = <<<'TEXT'
An absolutely delicious home-made Parsley Sauce for white fish bacon, or gammon
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/parsley-sauce/650x366/parsley-sauce-with-fish-mash-and-tomatoes-01.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/parsley-sauce.html';
$recipeName = 'Parsley Sauce';
$recipeIntro = <<<'TEXT'
This absolutely delicious home-made Parsley Sauce for white fish bacon, or gammon is just divine. It's so quick and easy to make  the best Parsley Sauce you've ever tasted
TEXT;
$styleBlock = <<<CSS
:root {
        /* set the background image */
        /* --bg-img: url("/images/blank.svg"); */
        --bg-img: url("/images/parsley.svg");
        /* set the background size */
        --bg-size: 72px;
        /* set the start of the 2nd colour of the gradient */
        --bg-1st-col-stop: 50vh;
      }
CSS;
$stylesheets = [
    'https://fonts.googleapis.com/css2?family=Poppins&display=swap',
    '/styles/styles.css',
    '/styles/background.css',
];

require __DIR__ . '/../../views/recipes/parsley-sauce.view.php';

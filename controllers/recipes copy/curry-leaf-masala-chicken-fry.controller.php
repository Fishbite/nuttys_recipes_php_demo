<?php

$pageTitle = 'Curry Leaf Masala Chicken Fry | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Now, this is something really special—I would even go so far as to say authentic Indian food: Curry Leaf Masala Chicken Fry... with a distinct curry leaf aroma
TEXT;
$ogDescription = <<<'TEXT'
Now, this is something really special - Curry Leaf Masala Chicken Fry
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/curry-leaf-masala-chicken-fry/650x366/curry-leaf-masala-and-rice.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/curry-leaf-masala-chicken-fry.html';
$recipeName = 'curry leaf masala chicken fry';
$recipeIntro = <<<'TEXT'
Now, this is something really special—I would even go so far as to say authentic Indian food: Curry Leaf Masala Chicken Fry... with a distinct curry leaf aroma
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

require __DIR__ . '/../../views/recipes/curry-leaf-masala-chicken-fry.view.php';

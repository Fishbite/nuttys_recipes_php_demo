<?php

$pageTitle = 'Spring Onion Chicken | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
Spring Onion Chicken should take you about 20 minutes to cook. I am using thighs as they are so flavoursome. This is so easy I'm almost embarrassed to share it with you!
TEXT;
$ogDescription = <<<'TEXT'
This is so easy I'm almost embarrassed to share it with you!
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/spring-onion-chicken/650x366/spring-onion-chicken-with-noodles-in-dish.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/spring-onion-chicken.html';
$recipeName = 'Spring Onion Chicken';
$recipeIntro = <<<'TEXT'
Spring Onion Chicken should take you about 20 minutes to cook. I am using thighs as they are so flavoursome. This is so easy I'm almost embarrassed to share it with you!
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

require __DIR__ . '/../../views/recipes/spring-onion-chicken.view.php';

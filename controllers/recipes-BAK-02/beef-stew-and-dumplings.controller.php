<?php

$pageTitle = 'Beef Stew and Dumplings | Nutty\'s Kitchen';
$metaDescription = <<<'TEXT'
As the nights draw in and it gets colder & colder, I crave this kind of dish — Beef Stew & Dumplings. As I own a pressure cooker, I can cut the cooking time by two hours
TEXT;
$ogDescription = <<<'TEXT'
MY beef stew and dumplings recipe for those short, cold winter days
TEXT;
$ogImage = 'https://www.nuttyskitchen.co.uk/images/beef-stew-and-dumplings/650x366/beef-stew-and-dumplings-cooked.webp';
$canonical = 'https://www.nuttyskitchen.co.uk/beef-stew-and-dumplings.html';
$recipeName = 'Beef Stew And Dumplings';
$recipeIntro = <<<'TEXT'
As the nights draw in and it gets colder & colder, I crave this kind of dish — Beef Stew & Dumplings. As I own a pressure cooker, I can cut the cooking time by two hours
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

require __DIR__ . '/../../views/recipes/beef-stew-and-dumplings.view.php';
